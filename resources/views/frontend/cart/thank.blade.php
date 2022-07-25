@extends('frontend.layout')

@section('title', 'Thanks - ZClothing')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-md-offset-3 my-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="card text-center" style="width: 50rem;">
                        <div class="card-header">
                            <h2>ZClothing</h2>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Hi <span>{{$name}}</span></li>
                        </ul>
                        <div class="card-body">
                            <h4 class="card-title">Cảm ơn bạn đã chọn sản phẩm của chúng mình.</h4>
                            <p class="card-text">Đơn hàng đang được chúng mình chuẩn bị và sẽ giao đến bạn sớm nhất có thể. Vui lòng kiểm tra email bạn nhé!!!</p>
                            <a href="/" class="btn btn-primary site-btn">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



