@extends('layouts.admin')

@section('title','Menü')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 text-center">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">İçerikler</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 text-center">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Id</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Menü</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Sayı</th>
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
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">Sayı</td>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                            <a href="{{route('admin_menu_edit',['id'=>$rs->id])}}">Düzenle</a>
                                        </td>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                            <a href="{{route('admin_menu_delete', ['id'=>$rs->id])}}" onclick="return confirm('{{$rs->title}} silinecek. Emin misiniz ?')" >Sil</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <a href="{{route('admin_menu_add')}}" class="btn btn-info btn-outline-info shadow-dark text-nowrap mb-0 offset-md-11"  >Menü Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
