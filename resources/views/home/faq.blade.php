@extends('layouts.home')


@section('title', 'About Us-'. $setting->title)

@section('content')
    <div class="col-8 offset-2" align="center">
        <h3 class="title">Sıkça Sorulan Sorular</h3>
        <hr>
        <div >
            <div class="card card-plain ">
                <table>
                    @foreach($datalist as $data)
                        <tr>
                            <td>
                                <div class="card-body m-1 ">
                                    <h5>
                                        {{$data->question}}
                                    </h5>
                                    <p class="caracter">
                                        {!! $data->answer  !!}
                                    </p>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

@endsection
