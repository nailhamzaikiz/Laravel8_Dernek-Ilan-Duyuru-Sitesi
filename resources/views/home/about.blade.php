@extends('layouts.home')


@section('title', 'About Us-'. $setting->title)

@section('content')
    <div class="col-sm-12" align="center">
        {!! $setting->aboutus !!}

    </div>

@endsection
