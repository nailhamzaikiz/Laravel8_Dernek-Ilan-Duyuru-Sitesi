@extends('layouts.home')


@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection


@section('keywords',$setting->keywords)

@section('content')

    <div class="card card-body container col-md-6 offset-md-1 mt-5" >
        <!-- İçerik -->
        <h3 class="title">Son Dakika Haberler</h3>
        <hr class="mb-4">
        <div class="row">
            @foreach($haberler as $data)
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="{{Storage::url($data->image)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">{{$data->title}}</a>
                            </h5>
                            <p class="caracter">
                                {!! $data->detail=substr($data->detail,0,20)  !!}...
                            </p>
                            <a href="javascript:;" class="text-info text-sm icon-move-right">Haber Detayları
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- İçerik sonu -->
    </div>
    @include('home._slider')
@endsection
