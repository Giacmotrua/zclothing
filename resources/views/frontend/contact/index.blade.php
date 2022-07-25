@extends('frontend.layout')

@section('title', 'Contact - ZClothing')

@section('content')
    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d930.399702201673!2d105.79558753569009!3d21.12855507579882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31350017e253a3a7%3A0xf1c325bedbbcd8d8!2zQ2jDuWEgS2ltIE7hu5c!5e0!3m2!1svi!2s!4v1656315320180!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Thông tin</span>
                            <h2>Liên Hệ Chúng Tôi</h2>
                            <p>Gọi cho chúng tôi hôm nay, làm giàu cho bạn ngày mai.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Hà Nội</h4>
                                <p>Số 1 Đoài, Kim Nỗ, Đông Anh <br />+84 123-456-78</p>
                            </li>
                            <li>
                                <h4>TP Hồ Chí Minh</h4>
                                <p>Số 1 Đoài, Kim Nỗ, Đông Anh <br />+84 123-456-78</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="{{route('contact.message')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    @error('name')
                                    <small class="alert" style="color: red">
                                        {{$message}}
                                    </small>
                                    @enderror
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    @error('email')
                                    <small class="alert" style="color: red">
                                        {{$message}}
                                    </small>
                                    @enderror
                                    <input name="email" type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    @error('message')
                                    <small class="alert" style="color: red">
                                        {{$message}}
                                    </small>
                                    @enderror
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">Gửi Tin Nhắn</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection


