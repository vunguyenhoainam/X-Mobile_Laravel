@extends('client.layouts.app')
@section('title', ''.$productDetail->name)

@section('product-detail')
    <div class="detail">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Trang chủ</a>
                </li>
                <li>
                    <a href="#">Iphone</a>
                </li>
            </ul>
            {{-- <form action="{{ route('client.cart.addCart', $productDetail->id) }}" method="POST"> --}}
            <form method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $productDetail->id }}">
                <div class="product-detail">
                    <h2 class="product-name"> {{ $productDetail->name }} </h2>
                    <div class="content">
                        <div class="content-left">
                            <img src="{{ $productDetail->images->count() > 0 ? asset('upload/' . $productDetail->images->first()->url) : 'upload/avatar_default.jpg' }}" alt="">
                        </div>
                        <div class="content-right">
                            <div class="product-price">
                                @if ($productDetail->sale > 0)
                                    <h3> {{ ($productDetail->price) - (($productDetail->price) * (($productDetail->sale)/100)) }}₫ </h3>
                                    <p>{{ $productDetail->price }}₫</p>
                                    <span>Giảm {{ $productDetail->sale }}%</span>
                                @else
                                    <h3> {{ $productDetail->price }}₫ </h3>
                                @endif
                            </div>
                            <div class="quantity">
                                <p>Số lượng: </p>
                                <input type="number" name="product_quantity" min="1" value="1">
                            </div>
                            <div class="description">
                                <p>Thông tin sản phẩm: </p>
                                <div>
                                    {{-- {{ $productDetail->description }} --}}
                                    - iPhone 13 ProMax - siêu phẩm được mong chờ nhất năm 2022 của Apple chuẩn bị ra mắt. Với những cải tiến vượt trội, phiên bản iPhone mới nhất hứa hẹn sẽ làm bùng nổ thị trường công nghệ.<br>
                                    - iPhone 13 ProMax vẫn sở hữu thiết kế tràn viền với “tai thỏ” giống iPhone X. Viền bezel phía trên và dưới cũng được làm gọn lại nhằm tối đa màn hình sử dụng. Cùng với đó, 4 góc của máy cũng được bo tròn nhẹ tạo cảm giác chắc chắn khi cầm trên tay. Mặt lưng iPhone 11 làm từ chất liệu kính nên rất sang trọng, tinh tế. Khác với các dòng iPhone trước, sản phẩm này sẽ có 6 màu bản bạc, vàng, xanh lá, trắng, đen đỏ.<br>
                                    - Công nghệ màn hình LCD Retina mang đến chất lượng tốt nhất. Độ phân giải màn hình 1125 x 2436 pixels hiển thị màu sắc chính xác và cho hình ảnh sắc nét. Màn hình rộng 6.1 inch giúp người sử dụng thoải mái trải nghiệm xem phim, lướt web… Đặc biệt Apple đã trang bị tần số quét từ 90 đến 120 Hz với 463 điểm màu.
                                </div>
                            </div>
                            <ul class="warranty">
                                <li>Số 1 về bảo hành và hậu mãi</li>
                                <li>
                                    <i class="fad fa-stars"></i>
                                    1 ĐỔI 1 trong 30 ngày nếu máy có lỗi! Bảo hành cả màn hình
                                </li>
                                <li>
                                    <i class="fad fa-stars"></i>
                                    Bảo hành 6 tháng với tất cả mọi lỗi (không gồm màn hình).
                                </li>
                                <li>
                                    <i class="fad fa-stars"></i>
                                    Hỗ trợ phần mềm trọn đời máy
                                </li>
                                <li>
                                    <i class="fad fa-stars"></i>
                                    Bảo hành cả màn hình, rơi vỡ, vào nước với gói Bảo Hành Vàng.
                                </li>
                            </ul>
                            <div class="list-btn">
                                <button type="submit" formaction="{{ route('client.cart.buyNow', $productDetail->id) }}" class="buy-now">
                                    <p>Mua ngay</p>
                                    <span> 
                                        <i class="fas fa-shipping-fast icon-ship"></i>
                                        Miễn phí vận chuyển toàn quốc
                                    </span>
                                </button>
                                <button type="submit" formaction="{{ route('client.cart.addCart', $productDetail->id) }}" class="add-cart">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('review')
    <div class="reviews">
        <div class="container">
            <div class="reviews-title">
                <h2>Review</h2>
                <p class="red-more">
                    Xem thêm
                    <i class="far fa-chevron-right"></i>
                </p>
            </div>
            <div class="list-review">
                <div class="review-product">
                    <iframe src="https://www.youtube.com/embed/L6d5DtA4zXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="review-product">
                    <iframe src="https://www.youtube.com/embed/HDrdJdV6fK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="review-product">
                    <iframe src="https://www.youtube.com/embed/VE2staOFX5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection