@extends('admin.layouts.app')

@section('title', 'Create User')

@section('content')

<div class="content p-5">
    <h2 class="mb-3 text-primary">Create User</h2>
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="input-group-static col-5 mb-4">
                <label>Image</label>
                <input type="file" accept="image/*" name="image" id="image-input" class="form-control">

                @error('image')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="col-5">
                <img src="" id="show-image" alt="">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" value="{{ old('name') }}" name="name" class="form-control">

            @error('name')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" value="{{ old('email') }}" name="email" class="form-control">

            @error('email')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Roles</label>
            <div class="row">
                @foreach ($roles as $groupName => $role)
                    <div class="col-5">
                        <h6 class="mt-4 font-weight-bold text-uppercase">{{ $groupName }}</h6>
                        <div>
                            @foreach ($role as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="role_ids[]" value="{{ $item->id }}">
                                <label class="form-check-label" for="flexCheckDefault">{{ $item->display_name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" value="{{ old('phone') }}" name="phone" class="form-control">

            @error('phone')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" value="{{ old('password') }}" name="password" class="form-control">

            @error('password')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" value="{{ old('address') }}" name="address" class="form-control">

            @error('address')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            @error('gender')
                <p class="mt-1 text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Add User</button>
        </div>
    </form>
</div>

@endsection



{{-- Handle Image --}}
@section('script')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(() => {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show-image').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image-input").change(function() {
                readURL(this);
            });
        });
    </script>
@endsection
