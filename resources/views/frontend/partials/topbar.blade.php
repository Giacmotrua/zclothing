<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a>
        <a href="{{route('tracking')}}"><img src="{{asset('frontend/img/icon/truck.png')}}" alt=""></a>
        @if(session('cart'))
            @php
                $quantity = 0;
                $total = 0;
            @endphp
            @foreach(session('cart') as $item)
                @php
                    $quantity += $item['quantity'];
                    $total += $item['price'] * $item['quantity']
                @endphp
            @endforeach
            <a href="{{route('cart')}}"><img src="{{asset('frontend/img/icon/cart.png')}}" alt=""> <span>{{ $quantity }}</span></a>
            <div class="price">{{number_format($total)}}đ</div>
        @else
            <a href="{{route('cart')}}"><img src="{{asset('frontend/img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">0đ</div>
        @endif
    </div>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('frontend/img/zloho7.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul class="menu__list">
                        @php
                        $top = \App\Models\Categories::where('type', '=', 'Top')->get();
                        $bottom = \App\Models\Categories::where('type', '=', 'Bottom')->get();
                        $accessory = \App\Models\Categories::where('type', '=', 'Accessory')->get();
                        @endphp
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{route('home')}}">Trang Chủ</a></li>
                        <li class="{{ request()->is('product/top') ? 'active' : '' }}"><a href="{{route('product', $id = 'top')}}">Áo</a>
                            <ul class="dropdown">
                                @foreach($top as $item)
                                    <li><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ request()->is('product/bottom') ? 'active' : '' }}"><a href="{{route('product', $id = 'bottom')}}">Quần</a>
                            <ul class="dropdown">
                                @foreach($bottom as $item)
                                    <li><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ request()->is('product/accessory') ? 'active' : '' }}"><a href="{{route('product', $id = 'accessory')}}">Phụ Kiện</a>
                            <ul class="dropdown">
                                @foreach($accessory as $item)
                                    <li><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a>
                    <a href="{{route('tracking')}}"><img src="{{asset('frontend/img/icon/truck.png')}}" alt=""></a>
                    @if(session('cart'))
                        @php
                            $quantity = 0;
                            $total = 0;
                        @endphp
                        @foreach(session('cart') as $item)
                            @php
                                $quantity += $item['quantity'];
                                $total += $item['price'] * $item['quantity']
                            @endphp
                        @endforeach
                        <a href="{{route('cart')}}"><img src="{{asset('frontend/img/icon/cart.png')}}" alt=""> <span>{{ $quantity }}</span></a>
                        <div class="price">{{number_format($total)}}đ</div>
                    @else
                        <a href="{{route('cart')}}"><img src="{{asset('frontend/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                        <div class="price">0đ</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
