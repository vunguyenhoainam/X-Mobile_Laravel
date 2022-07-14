@extends('admin.layouts.app')
@section('title', 'Create Category')
@section('content')
    <div class="card p-5">
        <h2 class="mb-5 text-primary">Create Category</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label>Name Category</label>
                <input type="text" value="{{ old('category_name') }}" name="category_name" class="form-control">

                @error('category_name')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Create Category</button>
            </div>
        </form>
    </div>
@endsection
