@extends('admin.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="content p-4">
        <h2 class="mb-3 text-primary">Products List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
        </div>
        <div>
            <table class="table table-bordered table-hover text-center">
                <tr>
                    <th class="align-middle">#</th>
                    <th class="align-middle">ID</th>
                    <th class="align-middle">Image</th>
                    <th class="align-middle">Product Name</th>
                    <th class="align-middle">Price</th>
                    <th class="align-middle">Sale</th>
                    <th class="align-middle">Description</th>
                    <th class="align-middle">Category</th>
                    <th class="align-middle">Action</th>
                </tr>

                @foreach ($products as $key => $item)
                    <tr>
                        <td class="align-middle">{{ $key + 1 }}</td>
                        <td class="align-middle">{{ $item->id }}</td>
                        <td class="align-middle"><img width="35px" height="35px" style="border-radius: 3px;" src="{{ $item->images->count() > 0 ? asset('upload/' . $item->images->first()->url) : 'upload/avatar_default.jpg' }}" alt=""></td>
                        <td class="align-middle">{{ $item->name }}</td>
                        <td class="align-middle">{{ $item->price }}</td>
                        <td class="align-middle">{{ $item->sale }}</td>
                        <td class="align-middle">{{ $item->description }}</td>
                        <td class="align-middle">{{ $item->categories->category_name }}</td>
                        <td class="align-middle">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{ route('products.edit', $item->id) }}" class="btn btn-success mr-3">Edit</a>
                                <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" data-id={{ $item->id }}>Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="paginate d-flex justify-content-end">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection