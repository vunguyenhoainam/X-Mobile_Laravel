@extends('admin.layouts.app')

@section('title', 'Role Create')

@section('content')

<div class="content p-5">
    <h2 class="mb-3 text-primary">Create Role</h2>
    <form action="{{ route('roles.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control">

            @error('name')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Display Name</label>
            <input type="text" value="{{ old('display_name') }}" name="display_name" class="form-control">

            @error('display_name')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Group</label>
            <select name="group" class="form-control">
                <option value="system">System</option>
                <option value="user">User</option>
            </select>

            @error('group')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Permision</label>
            <div class="row">
                @foreach ($permissions as $groupName => $permission)
                    <div class="col-5">
                        <h6 class="mt-4 font-weight-bold text-uppercase">{{ $groupName }}</h6>
                        <div>
                            @foreach ($permission as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="permission_ids[]" value="{{ $item->id }}">
                                <label class="form-check-label" for="flexCheckDefault">{{ $item->display_name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Add Role</button>
        </div>
      </form>
</div>

@endsection