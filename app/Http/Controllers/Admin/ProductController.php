<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;

class ProductController extends Controller
{
    protected $category;
    protected $product;
    protected $productDetail;

    public function __construct(Product $product, Category $category, ProductDetail $productDetail)
    {
        $this->product = $product;
        $this->category = $category;
        $this->productDetail = $productDetail;
    }

    public function index()
    {
        $products =  $this->product->latest('id')->paginate(5);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->category->get(['id','category_name']);
        return view('admin.products.create', compact('categories'));
    }

    public function store(CreateProductRequest $request)
    {
        $dataCreate = $request->all();
        $product = $this->product->create($dataCreate);
        $dataCreate['image'] = $this->product->saveImage($request);
        $product->images()->create(['url' => $dataCreate['image']]);
        return redirect('products');
    }

    public function show($id)
    {
        $product =  $this->product->with(['details', 'categories'])->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product =  $this->product->with(['details', 'categories'])->findOrFail($id);
        $categories = $this->category->get(['id','category_name']);
        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $dataUpdate = $request->all();
        $product = $this->product->findOrFail($id);
        $currentImage =  $product->images->count() > 0 ? $product->images->first()->url : '';
        $dataUpdate['image'] = $this->product->updateImage($request, $currentImage);
        $product->update($dataUpdate);
        $product->images()->create(['url' => $dataUpdate['image']]);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = $this->product->findOrFail($id);
        $product->delete();
        $product->details()->delete();
        $imageName =  $product->images->count() > 0 ? $product->images->first()->url : '';
        $this->product->deleteImage($imageName);
        return redirect()->route('products.index')->with(['message' => 'Delete product success']);
    }
}
