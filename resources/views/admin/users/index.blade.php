@extends('admin.layouts.app')

@section('title', 'User List')

@section('content')

    <div class="content p-5">
        <h2 class="mb-3">User List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        </div>
        <div class="table-content">
            <table class="table table-bordered table-hover align-middle">
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
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->id }}</td>
                        <td>
                            {{-- <p>{{ $user->images->first()->url }}</p> --}}
                            {{-- <img width="200px" height="200px" src="{{ $user->images ? asset('upload/users/' . $user->images->first()->url) : 'upload/users/avatar_default.jpg' }}" alt=""> --}}
                            <img width="50px" height="50px" style="border-radius: 3px;" src="{{ $user->images ? $user->image_path : asset('upload/users/avatar_default.jpg') }}" alt="">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>         
                        <td>{{ $user->gender }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success mr-3">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        
        <div class="paginate d-flex justify-content-end">
            {{ $users->links() }}
        </div>

    </div>

@endsection