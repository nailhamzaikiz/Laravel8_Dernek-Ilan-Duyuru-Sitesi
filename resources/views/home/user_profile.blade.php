@extends('layouts.home')


@section('title', 'About Us-'. $setting->title)

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
            <div class="card card-body my-4 col-sm-10">
                @include('profile.show')
            </div>




@endsection
