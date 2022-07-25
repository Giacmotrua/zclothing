@extends('frontend.layout')

@section('title', 'Chính sách vận chuyển - ZClothing')

@section('content')
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url({{asset('frontend/img/policy-bg1.jpg')}});background-size: cover;height: 300px;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-black-50">
                    <h3 class="mb-3">Chính Sách Vận Chuyển</h3>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-6" role="tabpanel">
                        <div class="product__details__tab__content">
                            <div class="product__details__tab__content__item">
                                <h5>1. Miễn phí vận chuyển với mọi đơn hàng.</h5>
                            </div>
                            <div class="product__details__tab__content__item">
                                <h5>2. Xác nhận đơn hàng:</h5>
                                <p>- Tất cả đơn hàng đặt trên Facebook / Website / Instagram đều cần được xác nhận thông qua số điện thoại đặt hàng của khách hàng.</p>
                                <p>- Những đơn hàng được gọi xác nhận nhưng không thể liên lạc từ 2 lần hệ thống sẽ tự động hủy đơn.</p>
                                <p>- Bên vận chuyển sẽ gọi điện để liên lạc ship hàng sau khi được xác nhận. Trong trường hợp không thể liên lạc với khách hàng từ 2 lần, đơn hàng sẽ tự động hủy.</p>
                            </div>
                            <div class="product__details__tab__content__item">
                                <h5>3. Thời gian nhận hàng:</h5>
                                <p>- Nội thành Hà Nội: 1-3 ngày kể từ khi đặt hàng.</p>
                                <p>- Ngoại thành Hà Nội: 3-5 ngày, tính theo ngày làm việc của bên cung cấp vận chuyển.</p>
                            </div>
                            <div class="product__details__tab__content__item">
                                <h5>4. Hình thức thanh toán:</h5>
                                <p>- Khách hàng thanh toán khi nhận hàng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




