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
            <div class="col-8 offset-3 ">
                <img class="mb-3" src="{{Storage::url($data->image)}}" alt="">
                <p class="mt-3">{!! $data->detail !!}</p>
            </div>
        </div>

        <!-- İçerik sonu -->
        <h3 class="title text-center">Yorumlar</h3>
        <hr class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Yorumlar</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                @foreach($reviews as $rs)
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$rs->user_id}}</h6>
                                            <p class="mb-0 text-xs">{{$rs->review}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @livewire('review',['id'=>$data->id])
            </div>
        </div>
    </div>

@endsection
