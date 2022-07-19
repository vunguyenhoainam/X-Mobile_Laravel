@extends('client.layouts.app')
@section('title', 'Prduct Details')

@section('product-detail')
    <section class="product-detail p-5">
        <form action="{{ route('client.cart.addCart', $productDetail->id) }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $productDetail->id }}">
            <div class="container d-flex">
                <img src="{{ $productDetail->images->count() > 0 ? asset('upload/' . $productDetail->images->first()->url) : 'upload/avatar_default.jpg' }}" alt="">
                <div class="content">
                    <p>Tên sản phẩm: {{ $productDetail->name }}</p>
                    <p>Giá: {{ $productDetail->price }} VND</p>
                    <p>Sale: {{ $productDetail->sale }}%</p>
                    <p>Mô tả: {{ $productDetail->description }}</p>
                    <label>Số lượng: </label><input type="number" name="product_quantity" min="1" value="1">
                
                    <button type="submit">Thêm vào giỏ hàng</button>
                    <button>Đặt hàng</button> 
                </div>
            </div>
        </form>
    </section>
@endsection