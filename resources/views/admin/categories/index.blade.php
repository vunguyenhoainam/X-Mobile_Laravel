@extends('admin.layouts.app')

@section('title', 'Category List')

@section('content')
    <div class="role-list p-4">
        <h2 class="mb-3 text-primary">Category List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
        </div>
        <div class="table-content">
            <table class="table table-bordered table-hover text-center">
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($categories as $key => $category) 
                    <tr>
                        <td class="align-middle">{{ $key + 1 }}</td>
                        <td class="align-middle">{{ $category->id }}</td>
                        <td class="align-middle">{{ $category->category_name }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success mr-3">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- Pagination --}}
        <div class="paginate d-flex justify-content-end">
            {{ $categories->links() }}
        </div>
    </div>
@endsection