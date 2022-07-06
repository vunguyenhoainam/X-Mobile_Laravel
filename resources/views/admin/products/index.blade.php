@extends('admin.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="content p-5">
        <h2 class="mb-3">Products List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create Product</a>
        </div>
        <div>
            <table class="table table-hover">
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
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->id }}</td>
                        {{-- <td><img src="{{ $item->image_path }}" width="50px" height="50px" style="border-radius: 3px;" alt=""></td> --}}
                        <td><img src="{{ $item->images->count() > 0 ? asset('upload/' . $item->images->first()->url) : 'upload/avatar_default.jpg' }}" width="50px" height="50px" style="border-radius: 5px;" alt=""></td>
                        <td>{{ $item->name }}</td>

                        <td>{{ $item->price }}</td>

                        <td>{{ $item->sale }}</td>
                        <td>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('products.destroy', $item->id) }}" id="form-delete{{ $item->id }}"
                                method="post">
                                @csrf
                                @method('delete')

                                <button class="btn btn-delete btn-danger" data-id={{ $item->id }}>Delete</button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </table>
        {{ $products->links() }}
    </div>

</div>

@endsection

@section('script')


@endsection
