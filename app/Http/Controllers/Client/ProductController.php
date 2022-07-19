<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $category;
    protected $product;
    
    public function __construct(Category $category, Product $product)
    {
        // $this->middleware('auth');
        $this->category = $category;
        $this->product = $product;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('client.products.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $productDetail = $this->product->with('details')->findOrFail($id);
        return view('client.products.detail', compact('productDetail'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
