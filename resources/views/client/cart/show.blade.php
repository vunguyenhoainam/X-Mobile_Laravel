@extends('client.layouts.app')
@section('title', 'Cart')

@section('cart')
    <div class="container">
        @if (count($total_product) > 0)
            <ul>
                @foreach ($total_product as $item)
                    <li style="display: flex;">
                        <img width="80" height="80" src="{{ $item->images->count() > 0 ? asset('upload/' . $item->images->first()->url) : 'upload/avatar_default.jpg' }}" alt="">
                        <div style="margin-left: 30px">
                            <p>Tên sản phẩm: {{ $item->name }}</p> 
                            <p>Số lượng: {{ $item->quantity}}</p>
                            <p>Thành tiền: {{ ($item->quantity) * ($item->price )}} VNĐ</p>
                        </div>
                        <div>
                            <a href="{{ route('client.cart.deleteCart', $item->id) }}">Xóa khỏi giỏ hàng</a>
                        </div>
                    </li>
                @endforeach
                <span style="color: green">Tổng tiền: {{ $total_money }} VNĐ</span> | <span style="color: red">Chưa thanh toán</span>
            </ul>
        @else
            <p>Không có sản phẩm</p>
        @endif
        
    </div>
@endsection