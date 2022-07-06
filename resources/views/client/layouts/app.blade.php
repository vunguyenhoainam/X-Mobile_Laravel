<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Mobile</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('client/assets/images/pc/logo-title.png') }}"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('client/assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/slick.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header__top">
                <h1 class="header-logo-pc">
                    <a href="#">X-Mobile</a>
                </h1>
                <a href="#" class="header-logo-sp">
                    <img src="{{ asset('client/assets/images/sp/logo-sp.png') }}" alt="">
                </a>
                <div class="header-address">
                    <svg class="icon-address" width="20px" height="20px" viewBox="0 0 97.713 97.713" style="enable-background:new 0 0 97.713 97.713;" xml:space="preserve">
                        <g>
                            <path d="M48.855,0C29.021,0,12.883,16.138,12.883,35.974c0,5.174,1.059,10.114,3.146,14.684   c8.994,19.681,26.238,40.46,31.31,46.359c0.38,0.441,0.934,0.695,1.517,0.695s1.137-0.254,1.517-0.695   c5.07-5.898,22.314-26.676,31.311-46.359c2.088-4.57,3.146-9.51,3.146-14.684C84.828,16.138,68.69,0,48.855,0z M48.855,54.659   c-10.303,0-18.686-8.383-18.686-18.686c0-10.304,8.383-18.687,18.686-18.687s18.686,8.383,18.686,18.687   C67.542,46.276,59.159,54.659,48.855,54.659z"></path>
                        </g>
                    </svg>
                    <p>Xuân Thủy, Cầu Giấy, Hà Nội</p>
                </div>
                <div class="header-search">
                    <input type="text" placeholder="Bạn cần tìm gì?">
                    <i class="far fa-search icon-search" title="Tìm kiếm"></i>
                </div>
                <a href="tel:0988888888" class="header-hotline">
                    <svg class="icon-hotline" width="30px" height="30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32.666 32.666" style="enable-background:new 0 0 32.666 32.666;" xml:space="preserve">
                        <g>
                            <path d="M28.189,16.504h-1.666c0-5.437-4.422-9.858-9.856-9.858l-0.001-1.664C23.021,4.979,28.189,10.149,28.189,16.504z
                                M16.666,7.856L16.665,9.52c3.853,0,6.983,3.133,6.981,6.983l1.666-0.001C25.312,11.735,21.436,7.856,16.666,7.856z M16.333,0
                                C7.326,0,0,7.326,0,16.334c0,9.006,7.326,16.332,16.333,16.332c0.557,0,1.007-0.45,1.007-1.006c0-0.559-0.45-1.01-1.007-1.01
                                c-7.896,0-14.318-6.424-14.318-14.316c0-7.896,6.422-14.319,14.318-14.319c7.896,0,14.317,6.424,14.317,14.319
                                c0,3.299-1.756,6.568-4.269,7.954c-0.913,0.502-1.903,0.751-2.959,0.761c0.634-0.377,1.183-0.887,1.591-1.529
                                c0.08-0.121,0.186-0.228,0.238-0.359c0.328-0.789,0.357-1.684,0.555-2.518c0.243-1.064-4.658-3.143-5.084-1.814
                                c-0.154,0.492-0.39,2.048-0.699,2.458c-0.275,0.366-0.953,0.192-1.377-0.168c-1.117-0.952-2.364-2.351-3.458-3.457l0.002-0.001
                                c-0.028-0.029-0.062-0.061-0.092-0.092c-0.031-0.029-0.062-0.062-0.093-0.092v0.002c-1.106-1.096-2.506-2.34-3.457-3.459
                                c-0.36-0.424-0.534-1.102-0.168-1.377c0.41-0.311,1.966-0.543,2.458-0.699c1.326-0.424-0.75-5.328-1.816-5.084
                                c-0.832,0.195-1.727,0.227-2.516,0.553c-0.134,0.057-0.238,0.16-0.359,0.24c-2.799,1.774-3.16,6.082-0.428,9.292
                                c1.041,1.228,2.127,2.416,3.245,3.576l-0.006,0.004c0.031,0.031,0.063,0.06,0.095,0.09c0.03,0.031,0.059,0.062,0.088,0.095
                                l0.006-0.006c1.16,1.118,2.535,2.765,4.769,4.255c4.703,3.141,8.312,2.264,10.438,1.098c3.67-2.021,5.312-6.338,5.312-9.719
                                C32.666,7.326,25.339,0,16.333,0z"></path>
                        </g>   
                    </svg>
                    <p>
                        <span>098.888.8888</span>
                        <span>Gọi mua hàng</span>
                    </p>
                </a>
                <a href="#" class="header-cart">
                    <i class="far fa-shopping-cart icon-cart"></i>
                    <span class="notifi">2</span>
                    <p>Giỏ hàng</p>
                </a>
                <a href="#" class="btn-menu-sp sp">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header__bottom">
                <ul>
                    <li>
                        <a href="#">
                            <i class="far fa-mobile icon-phone"></i>
                            ĐIỆN THOẠI
                        </a>
                        <div class="sub-menu">
                            <a href="#">Samsung</a>
                            <a href="#">Oppo</a>
                            <a href="#">Xiaomi</a>
                            <a href="#">LG</a>
                            <a href="#">Google Pixel</a>
                            <a href="#">Realme</a>
                            <a href="#">Vivo</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-apple icon-apple"></i>
                            IPHONE
                        </a>
                        <div class="sub-menu">
                            <a href="#">iphone 13 Series</a>
                            <a href="#">iphone 12 Series</a>
                            <a href="#">iphone 11 Series</a>
                            <a href="#">iphone Xs | Xs Max</a>
                            <a href="#">iphone XR</a>
                            <a href="#">iphone X</a>
                            <a href="#">iPhone SE (2020)</a>
                            <a href="#">iPhone 8 | 8 Plus</a>
                            <a href="#">iPhone 7 | 7 Plus</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-tablet icon-tablet"></i>
                            IPAD
                        </a>
                        <div class="sub-menu">
                            <a href="#">iPad Air 2</a>
                            <a href="#">iPad Air 3 2019</a>
                            <a href="#">iPad Air 4 2020</a>
                            <a href="#">iPad Air 5 2022</a>
                            <a href="#">iPad Gen 8 2020</a>
                            <a href="#">iPad Gen 9 2021</a>
                            <a href="#">iPad Pro 2020</a>
                            <a href="#">iPad Pro M1 2021</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-headphones icon-headphone"></i>
                            PHỤ KIỆN
                        </a>
                        <div class="sub-menu">
                            <a href="#">Loa bluetooth</a>
                            <a href="#">Pin dự phòng</a>
                            <a href="#">Cáp sạc</a>
                            <a href="#">Phụ kiện Apple</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-watch-fitness icon-watch"></i>
                            WATCH
                        </a>
                        <div class="sub-menu">
                            <a href="#">Series 3</a>
                            <a href="#">Series 4</a>
                            <a href="#">Series 5</a>
                            <a href="#">Series 6</a>
                            <a href="#">Watch SE</a>
                            <a href="#">Galaxy Watch</a>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-mobile-android icon-mobile"></i>
                            CŨ GIÁ RẺ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-address-card icon-card"></i>
                            TRẢ GÓP
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-newspaper icon-news"></i>
                            TIN TỨC
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-sp sp">
                <h2>
                    <a href="#">X-Mobile</a>
                </h2>
                <ul>
                    <li>
                        <a href="#">
                            <i class="far fa-mobile icon-phone"></i>
                            ĐIỆN THOẠI
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-apple icon-apple"></i>
                            IPHONE
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-tablet icon-tablet"></i>
                            IPAD
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-headphones icon-headphone"></i>
                            PHỤ KIỆN
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-watch-fitness icon-watch"></i>
                            WATCH
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-mobile-android icon-mobile"></i>
                            CŨ GIÁ RẺ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-address-card icon-card"></i>
                            TRẢ GÓP
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-newspaper icon-news"></i>
                            TIN TỨC
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="main">
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
        <section class="products">
            <div class="container">
                <div class="product-title">
                    <h2>Apple (iPhone)</h2>
                    <p class="red-more">
                        Xem thêm
                        <i class="far fa-chevron-right"></i>
                    </p>
                </div>
                <div class="list-products">
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_1.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_2.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_3.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_4.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_1.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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

                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_1.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_2.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_3.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_4.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_iphone_1.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <div class="product-title">
                    <h2>Apple (Ipad)</h2>
                    <p class="red-more">
                        Xem thêm
                        <i class="far fa-chevron-right"></i>
                    </p>
                </div>
                <div class="list-products">
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_1.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_2.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_3.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_4.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_5.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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

                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_1.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_2.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_3.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_4.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_ipad_5.png') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>iPhone 13 Pro Max 128GB | Chính hãng VN/A</h3>
                                <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul>
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <div class="product-title">
                    <h2>Apple (Apple Watch)</h2>
                    <p class="red-more">
                        Xem thêm
                        <i class="far fa-chevron-right"></i>
                    </p>
                </div>
                <div class="list-products">
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_aw_1.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su | Chính hãng VN/A</h3>
                                <!-- <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul> -->
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_aw_2.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su | Chính hãng VN/A</h3>
                                <!-- <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul> -->
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_aw_3.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su | Chính hãng VN/A</h3>
                                <!-- <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul> -->
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_aw_4.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su | Chính hãng VN/A</h3>
                                <!-- <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul> -->
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                    <a href="#" class="product-item">
                        <div class="product-wrap">
                            <div class="product-image">
                                <img src="{{ asset('client/assets/images/pc/image_aw_5.jpg') }}" alt="">
                            </div>
                            <div class="product-content">
                                <h3>Apple Watch Series 6 40mm (GPS) Viền Nhôm Dây Cao Su | Chính hãng VN/A</h3>
                                <!-- <ul class="info">
                                    <li>6.7 inches</li>
                                    <li>6 GB</li>
                                    <li>128 GB</li>
                                </ul> -->
                                <div class="price">
                                    <p class="price-new">29.690.000 ₫</p>
                                    <p class="price-old">34.990.000 ₫</p>
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
                </div>
            </div>
        </section>

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
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="policy">
                <h5>HƯỚNG DẪN - CHÍNH SÁCH</h5>
                <ul>
                    <li>
                        <a href="#">Hướng dẫn mua online</a>
                    </li>
                    <li>
                        <a href="#">Hướng dẫn mua trả góp</a>
                    </li>
                    <li>
                        <a href="#">Chính sách bảo hành</a>
                    </li>
                    <li>
                        <a href="#">Chính sách đổi, nâng đời</a>
                    </li>
                    <li>
                        <a href="#">Chính sách vận chuyển</a>
                    </li>
                    <li>
                        <a href="#">Chính sách bảo mật</a>
                    </li>
                </ul>
            </div>
            <div class="support">
                <h5>HỖ TRỢ KHÁCH HÀNG</h5>
                <ul>
                    <li>
                        <i class="fas fa-headset icon-call"></i>
                        Tư vấn mua hàng:
                        <a href="tel:098.888.8888">098.888.8888</a>
                        <p>(Từ 8h00 - 21h)</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="fas fa-headset icon-call"></i>
                        Hỗ trợ kỹ thuật, bảo hành:
                        <a href="tel:098.888.8888">098.888.8888</a>
                        <p>(Từ 9h00 - 19h00)</p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i class="fas fa-envelope icon-email"></i>
                        Góp ý kiến, khiếu nại:
                    </li>
                    <li>
                        <p>cskh.xmobile@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="address">
                <h5>ĐỊA CHỈ</h5>
                <ul>
                    <li>
                        <i class="fas fa-home icon-home"></i>
                        Xuân Thủy, Cầu Giấy, Hà Nội
                    </li>
                    <li>
                        <i class="fas fa-home icon-home"></i>
                        Cổ Nhuế, Bắc Từ Liêm, Hà Nội
                    </li>
                    <li>
                        <i class="fas fa-home icon-home"></i>
                        Hoàng Cầu, Đống Đa, Hà Nội
                    </li>
                </ul>
            </div>
            <a href="#" class="pay">
                <h5>HỖ TRỢ THANH TOÁN</h5>
                <img src="./assets/images/pc/pay.jpg" alt="">
            </a>
        </div>
    </footer>


    <script src="{{ asset('client/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/main.js') }}"></script>
</body>
</html>