@extends('frontend.layout')

@section('title')
    {{$keyword}} - ZClothing
@endsection

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Có {{$data->total()}} kết quả tìm kiếm phù hợp</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <span>Kết quả tìm kiếm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($data as $item)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg overlay">
                                        <a href="{{route('product.detail', $item->id)}}"><img src="{{asset('storage/images/'.$item->image)}}" alt="{{ $item->slug }}"></a>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{$item->name}}</h6>
                                        <a href="{{ route('cart.add', $item->id) }}" class="add-cart">+ Thêm Vào Giỏ Hàng</a>
                                        <h5>{{number_format($item->price)}}đ</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $data->appends(request()->except('page', 'search', 'keyword'))->links("pagination::bootstrap-5") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection


