@extends('layouts.home')


@section('title', $setting->title)
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
    <div class="card card-body container col-sm-10" >

        <!-- İçerik -->
        <div class="text-center">
            <h4 class="text-center ">Yorumlarım</h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th>İçerik</th>
                    <th>Konu</th>
                    <th>Yorum</th>
                    <th>Status</th>
                    <th>Tarih</th>
                    <th>Sil</th>

                </tr>
                </thead>
                <tbody>

                @foreach($datalist as $rs)
                    <tr>
                        <th scope="row">{{$rs->id}}</th>
                        <td ><a href="">{{$rs->content_id}}</a></td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->status}}</td>
                        <td>{{$rs->created_at}}</td>
                        <td>
                            <a href="{{route('user_review_delete', ['id'=>$rs->id])}}" onclick="return confirm('{{$rs->id}} silinecek. Emin misiniz ?')"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- İçerik sonu -->
    </div>

@endsection
