@extends('admin.layouts.app')
@section('title', 'Edit Category ')
@section('content')
    <div class="card p-5">
        <h2 class="mb-5 text-primary">Edit Category</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label>Name Category</label>
                <input type="text" value="{{ old('category_name') ?? $category->category_name }}" name="category_name" class="form-control">

                @error('category_name')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update Category</button>
            </div>
        </form>
    </div>

@endsection
