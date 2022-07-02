@extends('admin.layouts.app')

@section('title', 'User List')

@section('content')

    <div class="role-list p-5">
        <h2 class="mb-3">User List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('roles.create') }}" class="btn btn-primary">Create Role</a>
        </div>
        <div class="table-content">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>

                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->id }}</td>
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