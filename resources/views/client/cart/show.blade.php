@extends('client.layouts.app')
@section('title', 'Cart')

@section('cart')
    <div class="cart">
        <div class="cart-title">
            <a href="{{ redirect()->back()->getTargetUrl() }}">
                <svg version="1.1" width="10px" height="10px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12
                                C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084
                                c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864
                                l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path>
                        </g>
                    </g>
                </svg>
                Trở về
            </a>
            <h4>
                <i class="fas fa-cart-arrow-down icon-cart"></i>
                Giỏ hàng của bạn
            </h4>
        </div>
        @if (count($total_product) > 0)
            <ul class="list-product">
                @foreach ($total_product as $item)
                    <li>
                        <img src="{{ $item->images->count() > 0 ? asset('upload/' . $item->images->first()->url) : 'upload/avatar_default.jpg' }}" alt="">
                        <div class="info-detail">
                            <p class="product-name"> {{ $item->name }} </p>
                            <div class="product-price">
                                @if ($item->sale > 0)
                                    <h3> {{ ($item->price) - (($item->price) * (($item->sale)/100)) }} ₫</h3>
                                    <p>{{ $item->price }} ₫</p>
                                    <span>Giảm {{ $item->sale }}%</span>
                                @else
                                    <h3> {{ $item->price }} ₫</h3>
                                @endif
                            </div>
                            <p class="product-quantity">Số lượng: {{ $item->quantity}} </p>
                            <p class="product-quantity">Thành tiền: {{ ($item->quantity) * ($item->price )}} ₫</p>
                        </div>
                        <a href="{{ route('client.cart.deleteCart', $item->id) }}" class="btn-delete-cart">Xóa khỏi giỏ hàng</a>
                    </li>
                @endforeach
            </ul>
            <div class="total-money">
                <p>
                    <i class="fas fa-sack-dollar icon-money"></i>
                    Tổng tiền tạm tính: 
                </p>
                <span>{{ $total_money }} ₫</span>
            </div>
            <div class="buyer-info">
                <h5>
                    <i class="fas fa-user-edit"></i>
                    Thông tin khách hàng</h5>
                <form action="" method="POST">
                    <input type="text" name="name-user" placeholder="Họ tên">
                    <input type="text" name="phone-user" placeholder="Điện thoại">
                    <input type="text" name="comment-user" placeholder="Lưu ý hoặc yêu cầu trước khi nhận hàng">
                    <textarea name="address-user" cols="30" rows="5" placeholder="Địa chỉ nhận hàng"></textarea>
                    <h6>Chọn hình thức thanh toán</h6>
                    <ul class="payment-method">
                        <li>
                            <input type="radio" name="method-1" value="1" checked>
                            <label>Thanh toán tiền mặt khi nhận hàng</label>
                        </li>
                        <li>
                            <input type="radio" name="method-2" value="2">
                            <label>Thanh toán qua VNPAY</label>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="button-submit" onclick="javascript:submitForm();">
                        <i class="fas fa-box-usd icon-box-usd"></i>
                        Đặt hàng</a>
                </form>
            </div>
        @else
            <p>Không có sản phẩm</p>
        @endif
    </div>
@endsection