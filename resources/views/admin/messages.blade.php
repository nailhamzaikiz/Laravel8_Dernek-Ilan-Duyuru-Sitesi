@extends('layouts.admin')

@section('title','Message List')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 text-center">
                    @include('home.message')
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Mesajlar</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 text-center">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Id</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">İsim</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Telefon</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Konu</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Mesaj</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Yönetici Notu</th>
                                <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Okundu Bilgisi</th>
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
                                                    <h6 class="mb-0 text-sm ">{{ $rs->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$rs->email}}</td>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$rs->phone}}</td>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$rs->subject}}</td>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$rs->message}}</td>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$rs->note}}</td>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$rs->status}}</td>
                                        <td class="text-secondary text-xs font-weight-bold ">
                                            <a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800 height=700')"><i class="fas fa-edit"></i></a>
                                        </td>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                            <a href="{{route('admin_message_delete', ['id'=>$rs->id])}}" onclick="return confirm('{{$rs->title}} silinecek. Emin misiniz ?')" ><i class="far fa-trash-alt"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
