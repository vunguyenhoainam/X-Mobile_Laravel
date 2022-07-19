@extends('admin.layouts.app')
@section('title', 'Create Product')
@section('content')
    <div class="content p-5">
        <h2 class="mb-3 text-primary">Create Product</h2>
        <div>
            <form action="{{ route('products.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" accept="image/*" name="image" id="image-input" class="form-control h-100">
    
                    @error('image')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
    
                    <img src="" id="show-image" class="w-25 mt-4" style="border-radius: 5px" alt="">
                </div>

                <div class="mb-4">
                    <label>Name</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control">

                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Price</label>
                    <input type="number" step="0.1" value="{{ old('price') }}" name="price" class="form-control">
                    @error('price')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Sale</label>
                    <input type="number" value="0" value="{{ old('sale') }}" name="sale" class="form-control">
                    @error('sale')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label name="group" class="ms-0">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>

                    @error('category_ids')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea 
                        name="description" 
                        id="description" 
                        class="form-control" 
                        rows="5" 
                        style="width: 100%">{{ old('description') }}
                    </textarea>

                    @error('description')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Create Product</button>
                </div>
            </form>
        </div>
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

