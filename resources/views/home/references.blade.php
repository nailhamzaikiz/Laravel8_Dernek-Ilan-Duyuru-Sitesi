@extends('layouts.home')


@section('title', 'References-'. $setting->title)

@section('content')
    <div class="col-sm-12" text-align="center">
        {!! $setting->references !!}

    </div>

@endsection
