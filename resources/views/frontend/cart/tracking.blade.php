@extends('frontend.layout')

@section('title', 'Cart - ZClothing')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Tra cứu đơn hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Tra cứu đơn hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-option mt-5 mb-3">
                    <form action="{{route('tracking')}}" class="ml-3 mr-3 text-center">
                        <label for=""><h3>Mã Đơn Hàng</h3></label>
                        <div class="input-group">
                            <input id="code_order" name="codeOrder" type="text" class="form-control bg-light border-0" placeholder="Mã đơn hàng"
                                   aria-label="Search" aria-describedby="basic-addon2" style="height: auto;">
                            <div class="input-group-append">
                                <button class="btn site-btn" type="submit">
                                    Tìm Kiếm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if($data != null)
        <section class="shopping-tracking spad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 col-sm-11">
                        <div class="tracking text-center">
                            <div class="title">
                                <h4>Đơn Hàng {{$data->code_order}}</h4>
                            </div>
                        </div>
                        <div class="progress-track">
                            <ul id="progressbar">
                                <li class="step0 {{$data->status == 0 || $data->status == 1 || $data->status == 2 || $data->status == 3 ? 'active' : ''}} " id="step1">Ordered</li>
                                <li class="step0 {{$data->status == 1 || $data->status == 2 || $data->status == 3 ? 'active' : ''}} text-center" id="step2">Shipped</li>
                                <li class="step0 {{$data->status == 2 || $data->status == 3  ? 'active' : ''}} text-right" id="step3">On the way</li>
                                <li class="step0 {{$data->status == 3 ? 'active' : ''}} text-right" id="step4">Delivered</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="shopping__cart__table">
                            <table>
                                <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach($product as $id => $item)
                                    @php
                                        $total += $item->price * $item->quantity;
                                    @endphp
                                    <tr data-id="{{$id}}">
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ asset('storage/images/'.$item->image) }}" height="90" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $item->name}}</h6>
                                                <h5>{{number_format($item->price)}}đ</h5>
                                            </div>
                                        </td>
                                        <td data-th="quantity" class="quantity__item">{{$item->quantity}}</td>
                                        <td class="cart__price">{{number_format($item->price * $item->quantity)}}đ</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2" class="cart__price">Tổng tiền</td>
                                    <td class="cart__price">{{number_format($total)}}đ</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart__total">
                            <h4 class="mb-3">Thông tin người mua</h4>
                            <h5>{{$data->name}}</h5>
                            <p>{{$data->address}}</p>
                            <p>{{$data->phone}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection


