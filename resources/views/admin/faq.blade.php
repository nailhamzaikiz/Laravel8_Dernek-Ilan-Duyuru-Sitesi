@extends('layouts.admin')

@section('title','Sıkça Sorulan Sorular')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 text-center">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Sıkça Sorulan Sorular</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class="table-responsive p-0">
                        @include('home.message')
                        <table class="table align-items-center mb-0 text-center">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-danger text-s font-weight-bolder opacity-7">Id</th>
                                <th class="text-uppercase text-danger text-s font-weight-bolder opacity-7">Soru</th>
                                <th class="text-uppercase text-danger text-s font-weight-bolder opacity-7">Cevap</th>
                                <th class="text-uppercase text-danger text-s font-weight-bolder opacity-7">Status</th>
                                <th class="text-uppercase text-danger text-s font-weight-bolder opacity-7">Düzenle</th>
                                <th class="text-uppercase text-danger text-s font-weight-bolder opacity-7">Sil</th>
                            </tr>

                            </thead>
                            <tbody >
                                @foreach ($datalist as $rs)
                                    <tr>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->id}}</td>
                                        <td>
                                            <div class=" px-2 py-1 ">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm ">{{ $rs->question }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-secondary text-sm text-xs font-weight-bold ">{!!substr($rs->answer,0,50).'...' !!}</td>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->status}}</td>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                            <a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><i class="fas fa-edit"></i></a>
                                        </td>
                                        <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                            <a href="{{route('admin_faq_delete', ['id'=>$rs->id])}}" onclick="return confirm('{{$rs->title}} silinecek. Emin misiniz ?')" ><i class="far fa-trash-alt"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <a href="{{route('admin_faq_add')}}" class="btn btn-info btn-outline-info shadow-dark text-nowrap mb-0 offset-md-11"  >SSS Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
