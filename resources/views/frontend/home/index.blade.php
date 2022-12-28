@extends('frontend.layout')

@section('title', 'ZClothing')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{asset('frontend/img/banner6.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>hot summer t-shirt</h6>
                                <h2>Skeleton Hand Peace Sign</h2>
                                <p>Thử nghiệm phong cách thiết kế độc lạ bằng việc tạo bàn tay xương với biểu tượng hoà
                                    bình chắc chắn sẽ thỏa mãn được các dân chơi chính hiệu.</p>
                                <a href="{{route('product.detail', 6)}}" class="primary-btn">Mua Ngay <span
                                        class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="https://www.facebook.com/beplua97"/><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/bep.lua/"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{asset('frontend/img/banner7.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>track pants</h6>
                                <h2>Track Pant Hot Hit Summer 2022</h2>
                                <p>Chúng tôi hân hạnh đem đến một item track pant Sportlight hè này phối màu cực trendy
                                    cùng nhiểu đặc điểm nổi trội, đảm bảo thể hiện rõ cá tính của các bạn.</p>
                                <a href="{{route('product.detail', 14)}}" class="primary-btn">Mua Ngay <span
                                        class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="https://www.facebook.com/beplua97"/><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/bep.lua/"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{asset('storage/images/'.$bannerTop->image)}}" height="440px" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{$bannerTop->name}} </h2>
                            <a href="{{route('product.detail', $bannerTop->id)}}">Mua Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{asset('storage/images/'.$bannerAccessory->image)}}" height="440px" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Phụ Kiện</h2>
                            <a href="{{route('product', 'accessory')}}">Mua Ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{asset('storage/images/'.$bannerBottom->image)}}" height="440px" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{$bannerBottom->name}}</h2>
                            <a href="{{route('product.detail', $bannerBottom->id)}}">Mua Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter=".top">Áo</li>
                        <li data-filter=".bottom">Quần</li>
                        <li data-filter=".accessory">Phụ kiện</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach($top as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix top">
                        <div class="product__item">
                            <div class="product__item__pic set-bg overlay">
                                <a href="{{route('product.detail', $item->id)}}"><img
                                        src="{{asset('storage/images/'.$item->image)}}" alt="{{ $item->slug }}"></a>
                            </div>
                            <div class="product__item__text">
                                <h6>{{$item->name}}</h6>
                                <a href="{{ route('cart.add', $item->id) }}" class="add-cart">+ Thêm Vào Giỏ
                                    Hàng</a>
                                <h5>{{number_format($item->price)}}đ</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($bottom as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix bottom">
                        <div class="product__item">
                            <div class="product__item__pic set-bg overlay">
                                <a href="{{route('product.detail', $item->id)}}"><img
                                        src="{{asset('storage/images/'.$item->image)}}" alt="{{ $item->slug }}"></a>
                            </div>
                            <div class="product__item__text">
                                <h6>{{$item->name}}</h6>
                                <a href="{{ route('cart.add', $item->id) }}" class="add-cart">+ Thêm Vào Giỏ
                                    Hàng</a>
                                <h5>{{number_format($item->price)}}đ</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($accessory as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix accessory">
                        <div class="product__item">
                            <div class="product__item__pic set-bg overlay">
                                <a href="{{route('product.detail', $item->id)}}"><img
                                        src="{{asset('storage/images/'.$item->image)}}" alt="{{ $item->slug }}"></a>
                            </div>
                            <div class="product__item__text">
                                <h6>{{$item->name}}</h6>
                                <a href="{{ route('cart.add', $item->id) }}" class="add-cart">+ Thêm Vào Giỏ
                                    Hàng</a>
                                <h5>{{number_format($item->price)}}đ</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- product Section End -->

    <!-- Categories Section Begin -->
{{--    <section class="categories spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3">--}}
{{--                    <div class="categories__text">--}}
{{--                        <h2>Clothings Hot <br/> <span>Shoe Collection</span> <br/> Accessories</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="categories__hot__deal">--}}
{{--                        <img src="img/product-sale.png" alt="">--}}
{{--                        <div class="hot__deal__sticker">--}}
{{--                            <span>Sale Of</span>--}}
{{--                            <h5>$29.99</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 offset-lg-1">--}}
{{--                    <div class="categories__deal__countdown">--}}
{{--                        <span>Deal Of The Week</span>--}}
{{--                        <h2>Multi-pocket Chest Bag Black</h2>--}}
{{--                        <div class="categories__deal__countdown__timer" id="countdown">--}}
{{--                            <div class="cd-item">--}}
{{--                                <span>3</span>--}}
{{--                                <p>Days</p>--}}
{{--                            </div>--}}
{{--                            <div class="cd-item">--}}
{{--                                <span>1</span>--}}
{{--                                <p>Hours</p>--}}
{{--                            </div>--}}
{{--                            <div class="cd-item">--}}
{{--                                <span>50</span>--}}
{{--                                <p>Minutes</p>--}}
{{--                            </div>--}}
{{--                            <div class="cd-item">--}}
{{--                                <span>18</span>--}}
{{--                                <p>Seconds</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="primary-btn">Shop now</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad mb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('frontend/img/instagram/ins1.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('frontend/img/instagram/ins2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('frontend/img/instagram/ins3.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('frontend/img/instagram/ins4.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('frontend/img/instagram/ins5.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('frontend/img/instagram/ins6.jpg')}}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Thời gian chẳng chờ đợi một ai, bỏ mặc lại những kỉ niệm, những thời khắc. Hãy để chúng mình lưu giữ những khoảnh khắc tuyệt vời của bạn nhé. Gửi ảnh qua instagram chúng mình ngay:</p>
                        <h3>#Z-Clothing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
{{--    <section class="latest spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <span>Latest News</span>--}}
{{--                        <h2>Fashion New Trends</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                    <div class="blog__item">--}}
{{--                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>--}}
{{--                        <div class="blog__item__text">--}}
{{--                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>--}}
{{--                            <h5>What Curling Irons Are The Best Ones</h5>--}}
{{--                            <a href="#">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                    <div class="blog__item">--}}
{{--                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>--}}
{{--                        <div class="blog__item__text">--}}
{{--                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>--}}
{{--                            <h5>Eternity Bands Do Last Forever</h5>--}}
{{--                            <a href="#">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                    <div class="blog__item">--}}
{{--                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>--}}
{{--                        <div class="blog__item__text">--}}
{{--                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>--}}
{{--                            <h5>The Health Benefits Of Sunglasses</h5>--}}
{{--                            <a href="#">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Latest Blog Section End -->
@endsection


