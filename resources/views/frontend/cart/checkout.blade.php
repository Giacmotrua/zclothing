@extends('frontend.layout')

@section('title', 'Checkout - ZClothing')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Đặt Hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <span>Đặt Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form method="post" action="{{route('order')}}">
                    @csrf
                    <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h6 class="checkout__title">Thông Tin Nhận Hàng</h6>
                                @if ($errors->any())
                                    <div class="invalid-feedback">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Tên<span>*</span></p>
                                            <input name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Số điện thoại<span>*</span></p>
                                            <input name="phone" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input name="email" type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Địa chỉ<span>*</span></p>
                                    <input name="address" type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Ghi chú</p>
                                    <input name="note" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="checkout__order">
                                    <h4 class="order__title">Đơn hàng của bạn</h4>
                                    <div class="checkout__order__products">Sản phẩm <span>Tạm Tính</span></div>
                                    <ul class="checkout__total__products">
                                        @php
                                            $quantity = 0;
                                            $total = 0;
                                            $i = 0;
                                        @endphp
                                        @foreach(session('cart') as $id => $item)
                                            @php
                                                $i++;
                                                $quantity += $item['quantity'];
                                                $total += $item['price'] * $item['quantity'];
                                            @endphp
                                            <li>0{{$i}}. {{$item['name']}} <span>{{number_format($item['price'])}}đ</span></li>
                                        @endforeach
                                    </ul>
                                    <ul class="checkout__total__all">
                                        <li>Tổng Tiền <span>{{number_format($total)}}đ</span></li>
                                    </ul>
                                    <button value="submit" type="submit" class="site-btn">Đặt Hàng</button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection

@push('javascripts')
    <script src="{{ asset('frontend/js/checkout.js') }}" type="module">

    </script>
@endpush


