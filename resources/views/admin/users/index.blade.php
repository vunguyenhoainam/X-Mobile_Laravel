@extends('admin.layouts.app')

@section('title', 'User List')

@section('content')
    <div class="content p-4">
        <h2 class="mb-3 text-primary">User List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        </div>

        <table class="table table-bordered table-hover text-center">
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>

            @foreach ($users as $key => $user) 
                <tr>
                    <td class="align-middle">{{ $key + 1 }}</td>
                    <td class="align-middle">{{ $user->id }}</td>
                    <td class="align-middle">
                        <img width="35px" height="35px" style="border-radius: 3px;" src="{{ $user->images->count() > 0 ? $user->image_path : asset('upload/avatar_default.jpg') }}" alt="">
                    </td>
                    <td class="align-middle">{{ $user->name }}</td>
                    <td class="align-middle">{{ $user->email }}</td>
                    <td class="align-middle">{{ $user->phone }}</td>
                    <td class="align-middle">{{ $user->address }}</td>         
                    <td class="align-middle">{{ $user->gender }}</td>
                    <td class="align-middle">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success mr-3">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        
        <div class="paginate d-flex justify-content-end">
            {{ $users->links() }}
        </div>
    </div>
@endsection