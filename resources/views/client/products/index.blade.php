@extends('client.layouts.app')

@section('banner')
    <section class="banner">
        <div class="container">
            <div class="banner__left">
                <div class="slide-wrap">
                    <div class="list-slide-item">
                        <a href="#" class="slide-item">
                            <img src="{{ asset('client/assets/images/pc/slide_1.jpg') }}" alt="">
                        </a>
                        <a href="#" class="slide-item">
                            <img src="{{ asset('client/assets/images/pc/slide_2.jpg') }}" alt="">
                        </a>
                        <a href="#" class="slide-item">
                            <img src="{{ asset('client/assets/images/pc/slide_3.png') }}" alt="">
                        </a>
                        <a href="#" class="slide-item">
                            <img src="{{ asset('client/assets/images/pc/slide_4.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="control">
                        <div class="control-left btn-control btn-pre">
                            <i class="far fa-chevron-left"></i>
                        </div>
                        <div class="control-right btn-control btn-next">
                            <i class="far fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
                <div class="text-slide-wrap pc">
                    <div class="wrap">
                        <a href="#">Xả kho máy cũ</a>
                        <a href="#">S20 Series</a>
                        <a href="#">Iphone 13 Series</a>
                        <a href="#">Pixel 6 | 6 Pro</a>
                        <a href="#">Xs | XsMax giảm kịch sàn</a>
                    </div>
                </div>
            </div>
            <div class="banner__right pc">
                <a href="#">
                    <img src="{{ asset('client/assets/images/pc/banner_1.jpg') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('client/assets/images/pc/banner_2.png') }}" alt="">
                </a>
                <a href="#">
                    <img src="{{ asset('client/assets/images/pc/banner_3.jpg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="banner__bottom">
            <div class="container">
                <a href="#">
                    <img src="./assets/images/pc/banner_4.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
@endsection

@section('products')
    @foreach ($categories as $category)
    <section class="products">
        <div class="container">
            <div class="product-title">
                <h2>{{ $category->category_name }}</h2>
                <p class="red-more">
                    Xem thêm
                    <i class="far fa-chevron-right"></i>
                </p>
            </div>
            <div class="list-products">
                @foreach ($category->product->sortByDesc('id')->take(10) as $item)
                    <a href="{{ route('client.product.show', $item->id) }}" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ $item->images->count() > 0 ? asset('upload/' . $item->images->first()->url) : 'upload/avatar_default.jpg' }}" id="show-image" class="w-25 mt-4" style="border-radius: 5px" alt="">
                            </div>
                            <div class="product-content">
                                <h3>{{ $item->name }}</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">{{ $item->sale > 0 ? $item->price*(($item->sale)/100) : $item->price }} ₫</p>   
                                    @if ($item->sale > 0)
                                        <p class="price-old">{{ $item->price }} ₫</p>
                                    @endif
                                </div>
                                <div class="rating">
                                    <div class="list-star">
                                        <i class="fas fa-star icon-start active"></i>
                                        <i class="fas fa-star icon-start active"></i>
                                        <i class="fas fa-star icon-start active"></i>
                                        <i class="fas fa-star icon-start"></i>
                                        <i class="fas fa-star icon-start"></i>
                                    </div>
                                    <span>26 đánh giá</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endforeach
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