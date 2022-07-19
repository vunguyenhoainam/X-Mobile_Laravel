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