@extends('frontend.layout')

@section('title', 'Cart - ZClothing')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ Hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Giỏ Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    @if(session('cart'))
        <section class="shopping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="shopping__cart__table">
                            <table>
                                <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $quantity = 0;
                                    $total = 0;
                                @endphp
                                @foreach(session('cart') as $id => $item)
                                    @php
                                        $quantity += $item['quantity'];
                                        $total += $item['price'] * $item['quantity'];
                                    @endphp
                                    <tr data-id="{{$id}}">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ asset('storage/images/'.$item['image']) }}" height="90" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $item['name'] }}</h6>
                                                <h5>{{number_format($item['price'])}}đ</h5>
                                            </div>
                                        </td>
                                        <td data-th="quantity" class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input class="update_cart quantity" data-route="{{ route('cart.update') }}" type="text" value="{{ $item['quantity'] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{number_format($item['price'] * $item['quantity'])}}đ</td>
                                        <td class="cart__close"><button class="remove-from-cart" data-route="{{ route('cart.remove') }}"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
{{--                        <div class="cart__discount">--}}
{{--                            <h6>Discount codes</h6>--}}
{{--                            <form action="#">--}}
{{--                                <input type="text" placeholder="Coupon code">--}}
{{--                                <button type="submit">Apply</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                        <div class="cart__total">
                            <h6>Giỏ hàng <span class="text-lowercase">({{$quantity}} sản phẩm)</span></h6>
                            <ul>
{{--                                <li>Subtotal <span>$ 169.50</span></li>--}}
                                <li>Tổng tiền <span>{{number_format($total)}}đ</span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" class="primary-btn">Thanh Toán Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-md-offset-3 my-3">
                    <div class="d-flex flex-column align-items-center">
                        <img src="//bizweb.dktcdn.net/100/414/728/themes/803486/assets/empty-cart.png?1654316792671" width="200px" class="img-responsive center-block" alt="Giỏ hàng trống">
                        <div class="btn-cart-empty mt-3">
                            <a class="btn btn-default site-btn" href="/" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <!-- Shopping Cart Section End -->
@endsection

@push('javascripts')
    <script src="{{ asset('frontend/js/cart.js') }}" type="text/javascript"></script>
@endpush


