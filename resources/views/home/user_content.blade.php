@extends('layouts.home')


@section('title', 'İçeriklerim')
@section('description'){{$setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')

            <div class="card my-1 col-sm-2">
                <h3>Hesabım</h3>
                <hr class="my-2">
                <ul class="navbar-nav">
                    <li>
                        <a href="{{route('myprofile')}}">Hesabım</a>
                    </li>
                    <li>
                        <a href="{{route('user_contents')}}">İçeriklerim</a>
                    </li>
                    <li>
                        <a href="{{route('myreviews')}}">Yorumlarım</a>
                    </li>
                    <li>
                        <a href="{{route('mypayments')}}">ödemeler</a>
                    </li>
                </ul>
            </div>
            <div class="card my-4 col-sm-10">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 text-center">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">İçeriklerim</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 text-center">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Id</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Menü</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Tür</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Üst Menü</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Resim</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Düzenle</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Sil</th>
                            </tr>

                            </thead>
                            <tbody >
                            @foreach ($datalist as $rs)
                                <tr>
                                    <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->id}}</td>
                                    <td>
                                        <div class=" px-2 py-1 ">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm ">{{ $rs->title }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->status}}</td>
                                    <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->type}}</td>
                                    <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->menu->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                        @endif
                                    </td>
                                    <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                        <a href="{{route('user_content_edit',['id'=>$rs->id])}}"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                        <a href="{{route('user_content_delete', ['id'=>$rs->id])}}" onclick="return confirm('{{$rs->title}} silinecek. Emin misiniz ?')" ><i class="far fa-trash-alt"></i></a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <a href="{{route('user_content_add')}}" class="btn btn-info btn-outline-info shadow-dark text-nowrap mb-0 offset-md-10"  >İçerik Ekle</a>
                    </div>
                </div>
            </div>

@endsection
