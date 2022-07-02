@extends('admin.layouts.app')

@section('title', 'Role List')

@section('content')

    <div class="role-list p-5">
        <h2 class="mb-3">Role List</h2>
        <div class="btn-create mb-3 d-flex justify-content-end">
            <a href="{{ route('roles.create') }}" class="btn btn-primary">Create Role</a>
        </div>
        <div class="table-content">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-success mr-3">Edit</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
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
            {{ $roles->links() }}
        </div>

    </div>

@endsection