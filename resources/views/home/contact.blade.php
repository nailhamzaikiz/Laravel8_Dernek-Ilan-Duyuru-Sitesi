@extends('layouts.home')


@section('title', 'İletişim-'. $setting->title)

@section('content')
    <div class="col-md-8" align="center">
        <h3 class="title">İletişim Bilgileri</h3>
        {!! $setting->contact !!}
    </div>
    <div class="col-md-4" align="center">
        <h3 class="title">İletişim Formu</h3>
        <div class=" d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-info  shadow-info border-radius-lg p-3">
                        <h3 class="text-white text-primary mb-0">Bize Yazın</h3>
                    </div>
                </div>
                <div class="card-body">
                    @include('home.message')
                    <form id="contact-form" method="post" action="{{route('sendmessage')}}" autocomplete="off">
                        @csrf
                        <div class="card-body p-0 my-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label>İsim & Soyisim</label>
                                        <input type="text" name="name" class="form-control" placeholder="İsim & Soyisim">
                                    </div>
                                </div>
                                <div class="col-md-6 ps-md-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email Adresiniz">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Telefon</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Telefon">
                                    </div>
                                </div>
                                <div class="col-md-6 ps-md-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Konu</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Mesajınızın Konusu">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-md-0 mt-4">
                                <div class="input-group input-group-static mb-4">
                                    <label>Mesajınız</label>
                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Mesajınızı Yazın..."></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Gönder</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
