@extends('admin.layouts.app')
@section('title', 'Edit User ')
@section('content')
    <div class="content p-5">
        <h2 class="mb-3 text-primary">Edit User</h2>
        <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label>Image</label>
                <input type="file" accept="image/*" name="image" id="image-input" class="form-control h-100">

                @error('image')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror

                <img src="{{ $user->images->count() > 0 ? asset('upload/' . $user->images->first()->url) : 'upload/avatar_default.jpg' }}" id="show-image" class="w-25 mt-4" style="border-radius: 5px" alt="">
            </div>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" value="{{ old('name') ?? $user->name }}" name="name" class="form-control">

                @error('name')
                    <p class="mt-1 text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" value="{{ old('email') ?? $user->email }}" name="email" class="form-control">
                @error('email')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" value="{{ old('phone') ?? $user->phone }}" name="phone" class="form-control">
                @error('phone')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label name="group" class="ms-0">Gender</label>
                <select name="gender" class="form-control" value={{ $user->gender }}>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                @error('gender')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label>Address</label>
                <input type="text" value="{{ old('address') ?? $user->address }}" name="address" class="form-control">
                @error('address')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label>Password</label>
                <input type="password" value="{{ old('password') ?? $user->password }}" name="password" class="form-control">

                @error('password')
                    <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Roles</label>
                <div class="row">
                    @foreach ($roles as $groupName => $role)
                        <div class="col-5">
                            <h6>{{ $groupName }}</h6>
                            <div>
                                @foreach ($role as $item)
                                    <div class="form-check">
                                        <input class="form-check-input" name="role_ids[]"
                                            {{ $user->roles->contains('id', $item->id) ? 'checked' : '' }}
                                            type="checkbox" value="{{ $item->id }}">
                                        <label class="custom-control-label" for="customCheck1">{{ $item->display_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update User</button>
            </div>
        </form>
    </div>
@endsection


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
