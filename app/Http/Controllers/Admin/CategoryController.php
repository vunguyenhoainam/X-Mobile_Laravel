<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->latest('id')->paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $parentCategories =  $this->category->getParents();
        return view('admin.categories.create', compact('parentCategories'));
    }

    public function store(CreateCategoryRequest $request)
    {
        $dataCreate = $request->all();

        $category = $this->category->create($dataCreate);

        return redirect()->route('categories.index')->with(['message' => 'create new category: '. $category->name." success"]);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = $this->category->with('childrens')->findOrFail($id);
        $parentCategories =  $this->category->getParents();
        return view('admin.categories.edit', compact('category', 'parentCategories'));
    }


    public function update(Request $request, $id)
    {

        $dataUpdate = $request->all();

        $category = $this->category->findOrFail($id);

        $category->update($dataUpdate);

        return redirect()->route('categories.index')->with(['message' => 'Update  category: '. $category->name." success"]);

    }

    public function destroy($id)
    {
        $category = $this->category->findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index')->with(['message' => 'Delete  category: '. $category->name." success"]);
    }
}
