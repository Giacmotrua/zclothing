@extends('frontend.layout')

@section('title', 'Chính sách đổi trả - ZClothing')

@section('content')
    <header>
        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="background-image: url({{asset('frontend/img/policy-bg1.jpg')}});background-size: cover;height: 300px;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-black-50">
                    <h3 class="mb-3">Chính Sách Đổi Trả</h3>
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
@endsection



