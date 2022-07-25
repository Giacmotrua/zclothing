@extends('frontend.layout')

@section('title')
    {{$infoCategory}} - ZClothing
@endsection

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>{{$infoCategory}}</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Trang chủ</a>
                            <span>{{$infoCategory}}</span>
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
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                @php
                                    $top = \App\Models\Categories::where('type', '=', 'Top')->get();
                                    $bottom = \App\Models\Categories::where('type', '=', 'Bottom')->get();
                                    $accessory = \App\Models\Categories::where('type', '=', 'Accessory')->get();
                                @endphp
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Áo</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach($top as $item)
                                                        <li><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Quần</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach($bottom as $item)
                                                        <li><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Phụ kiện</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach($accessory as $item)
                                                        <li><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Sizes</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">xs
                                                    <input type="radio" id="xs">
                                                </label>
                                                <label for="sm">s
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md">m
                                                    <input type="radio" id="md">
                                                </label>
                                                <label for="xl">xl
                                                    <input type="radio" id="xl">
                                                </label>
                                                <label for="2xl">2xl
                                                    <input type="radio" id="2xl">
                                                </label>
                                                <label for="xxl">xxl
                                                    <input type="radio" id="xxl">
                                                </label>
                                                <label for="3xl">3xl
                                                    <input type="radio" id="3xl">
                                                </label>
                                                <label for="4xl">4xl
                                                    <input type="radio" id="4xl">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form action="{{route('product', $id)}}" method="GET" id="form-sort">
                                    <div class="shop__product__option__right">
                                        <p>Sắp xếp theo giá:</p>
                                        <select name="type" id="sort">
                                            <option {{$type == 'asc' ? 'selected' : ''}} value="asc">Thấp đến Cao</option>
                                            <option {{$type == 'desc' ? 'selected' : ''}} value="desc">Cao đến Thấp</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($infoProduct as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
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
                            {{ $infoProduct->appends(request()->except('page', 'search', 'keyword'))->links("pagination::bootstrap-5") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection

@push('javascripts')
    <script src="{{ asset('frontend/js/product.js') }}"></script>
@endpush


