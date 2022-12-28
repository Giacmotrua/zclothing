@extends('frontend.layout')

@section('title')
    {{$product->name}} - ZClothing
@endsection

@section('content')
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{route('home')}}">Home</a>
                            <a href="{{ route('product', $type)}}">{{$infoCategory}}</a>
                            <span>{{$product->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{asset('storage/images/'.$product->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="product__details__text">
                            <h4>{{$product->name}}</h4>
                            <h3>{{number_format($product->price)}}đ</h3>
                            <p>{{$product->description}}</p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <a href="{{route('cart.add', $product->id)}}" class="primary-btn">thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Chính sách đổi trả</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>1. Tất cả các sản phẩm đã mua sẽ không được hoàn trả bằng tiền mặt.</h5>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>2. Yêu cầu sản phẩm:</h5>
                                            <p>- Sản phẩm còn mới, nguyên tag, chưa sử dụng, sửa chữa hay giặt, là trong vòng 7 ngày kể từ ngày nhận hàng.</p>
                                            <p>- Sản phẩm còn mới, nguyên tag, chưa sử dụng, sửa chữa hay giặt, là trong vòng 7 ngày kể từ ngày nhận hàng.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>3. Khách hàng được chấp nhận đổi sang bất kỳ món hàng nào có bán trong cửa hàng bằng hoặc hơn giá trị:</h5>
                                            <p>- Cửa hàng không trả lại tiền thừa nếu khách muốn đổi sang sản phẩm có giá trị thấp hơn.</p>
                                            <p>- Hàng chỉ đổi một lần duy nhất.</p>
                                            <p>- Kiểm tra kỹ chất lượng sản phẩm đổi.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>4. Cách thức đổi hàng:</h5>
                                            <p>- Khách hàng chụp đầy đủ hóa đơn, tình trạng hàng, mác hàng và gửi hình ảnh kèm thông tin cá nhân đến fanpage ClownZ để được tư vấn đổi hàng.</p>
                                            <p>- Khi được sự đồng ý của nhân viên, khách bọc sản phẩm muốn đổi chuyển về địa chỉ như nhân viên chăm sóc khách hàng hướng dẫn và lựa chọn sản phẩm muốn đổi.</p>
                                            <p>- Khách hàng thanh toán phần chênh lệch (nếu có) giữa sản phẩm mới và sản phẩm cũ.</p>
                                            <p>- Khi nhận được sản phẩm cần đổi và chuyển khoản chênh lệch (nếu có), nhân viên bọc hàng và gửi sản phẩm khách chọn đổi.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Lưu ý: </h5>
                                            <p>- Với trường hợp sản phẩm bị lỗi do nhà sản xuất (sản phẩm rách, bung chỉ, sờn vải), lỗi gửi nhầm và thiếu hàng, bên phía ZClothing sẽ chịu phí ship đổi trả sản phẩm.</p>
                                            <p>- Với trường hợp khách hàng muốn đổi sản phẩm do lệch size hoặc muốn đổi sản phẩm khác, bên phía khách hàng sẽ chịu phí đổi trả sản phẩm. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản Phẩm Liên Quan</h3>
                </div>
            </div>
            <div class="row">
                @foreach($relatedProduct as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
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
        </div>
    </section>
    <!-- Related Section End -->
@endsection


