@extends('admin.layouts.app')
@section('title', 'Create Product')
@section('content')
    <div class="content p-5">
        <h2 class="mb-3 text-primary">Create Product</h2>
        <div>
            <form action="{{ route('products.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class=" input-group-static col-5 mb-4">
                        <p>Image</p>
                        <input type="file" accept="image/*" name="image" id="image-input">

                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <img src="" id="show-image" alt="" width="300px">
                    </div>
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

                <div class="form-group">
                    <label>Description</label>
                    <textarea 
                        name="description" 
                        id="description" 
                        class="form-control" 
                        cols="4" 
                        rows="5" 
                        style="width: 100%">{{ old('description') }}
                    </textarea>

                    @error('description')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label name="group" class="ms-0">Category</label>
                    <select name="category_ids[]" class="form-control" multiple>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                    @error('category_ids')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-submit btn-primary">Create Product</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
@endsection
