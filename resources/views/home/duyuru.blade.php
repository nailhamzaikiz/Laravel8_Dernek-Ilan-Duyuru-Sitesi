@extends('layouts.home')


@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')

    <div class="card card-body container col-md-6 offset-md-1 mt-5" >
        <!-- İçerik -->
        <h3 class="title text-center">{{$data->title}}</h3>
        <hr class="mb-4">
        <div class="row">
            <div class="col-8 offset-2 ">
                <img class="mb-3" src="{{Storage::url($data->image)}}" alt="">
                <p class="mt-3">{!! $data->detail !!}</p>
            </div>
        </div>
        <!-- İçerik sonu -->
    </div>
    @include('home._slider')
@endsection
