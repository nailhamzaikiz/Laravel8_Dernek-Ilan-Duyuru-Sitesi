@extends('layouts.home')


@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')
    <div class="my-4 col-sm-2">
        <h5>Hesabım</h5>
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
                <a href="{{route('mypayments')}}">ödemelerim</a>
            </li>
        </ul>
    </div>
    <div class="card card-body container col-sm-10   mt-5 " >
        <!-- İçerik -->
        <div class="text-center">
            <h4 class="text-center ">Ödemelerim</h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th>Yıl</th>
                    <th>Ödeme</th>
                    <th>Durumu</th>
                    <th>Tarih</th>

                </tr>
                </thead>
                <tbody>

                <?php
                    $toplam=0;
                    $sıra=1;
                ?>

                @foreach($datalist as $rs)
                    <tr>
                        <th scope="row">{{$sıra++}}</th>
                        <td>{{$rs->year}}</td>
                        <td>{{$rs->payment}}</td>

                        @if($rs->status == 'Ödendi')
                            <td class="text-success" >{{$rs->status}}</td>
                        @else
                            <td class="text-warning" >{{$rs->status}}</td>
                            <?php
                            $toplam+=$rs->payment;
                            ?>
                        @endif
                        <td>{{$rs->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <p class="text-sm-end text-rose px-5">
                Toplam Ödeme Miktarı: {{$toplam}}
            </p>
        </div>
        <!-- İçerik sonu -->
    </div>

@endsection
