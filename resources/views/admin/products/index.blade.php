@extends('admin.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="content p-4">
        <h2 class="mb-3 text-primary">Products List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create Product</a>
        </div>
        <div>
            <table class="table table-bordered table-hover text-center">
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>Action</th>
                </tr>

                @foreach ($products as $key => $item)
                    <tr>
                        <td class="align-middle">{{ $key + 1 }}</td>
                        <td class="align-middle">{{ $item->id }}</td>
                        <td class="align-middle"><img src="{{ $item->images ? asset('upload/' . $item->images->first()->url) : 'upload/avatar_default.jpg' }}" width="50px" height="50px" style="border-radius: 5px;" alt=""></td>
                        <td class="align-middle">{{ $item->name }}</td>
                        <td class="align-middle">{{ $item->price }}</td>
                        <td class="align-middle">{{ $item->sale }}</td>
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

@section('script')


@endsection
