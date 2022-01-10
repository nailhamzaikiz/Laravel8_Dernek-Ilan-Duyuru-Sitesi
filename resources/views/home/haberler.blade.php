@extends('layouts.home')


@section('title', 'About Us-'. $setting->title)

@section('content')
    <div class="col-8 offset-2" align="center">
        <h3 class="title">Son Dakika Haberler</h3>
        <hr>
        <div >
            <div class="card card-plain ">
                <table>
                    @foreach($data as $data)
                        <tr>
                            <td >
                                <div class="card-header position-relative  ">
                                    <a class="text-center">
                                        <img src="{{Storage::url($data->image)}}" width="250px" alt="img-blur-shadow" class="haber-image shadow border-radius-lg" loading="lazy">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="card-body m-1 ">
                                    <h5>
                                        <a href="javascript:;" class="text-dark font-weight-bold">{{$data->title}}</a>
                                    </h5>
                                    <p class="caracter">
                                        {!! $data->detail  !!}
                                    </p>
                                    <a href="{{route('haber',['id'=>$data->id])}}" class="text-info text-sm icon-move-right">Haber Detayları
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection
