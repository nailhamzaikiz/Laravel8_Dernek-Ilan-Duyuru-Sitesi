@extends('layouts.admin')

@section('title','Ekle')
@section('javascript')
    <!-- include summernote without bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{$data->title}} İçin Resim Ekle</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class=" p-0">
                        <form action="{{route('admin_image_store',['content_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label  class="font-weight-bold">Başlık</label>
                                <input class="form-control border border-info px-2" name="title" id="title" type="text" placeholder="Başlık">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Resim</label>
                                <input type="file" class="form-control border border-info px-2" name="image" id="image" placeholder="Resim">
                            </div>
                            <button href="/create" type="submit" class="btn btn-info shadow-dark">Resim Ekle</button>
                        </form>
                    </div>
                </div>
                <table class="table align-items-center mb-0 text-center">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Id</th>
                        <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Başlık</th>
                        <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Resim</th>
                        <th class="text-uppercase text-danger text-xxs font-weight-bolder opacity-7">Sil</th>
                    </tr>
                    </thead>
                    <tbody >
                    @foreach ($images as $rs)
                        <tr>
                            <td class="text-uppercase text-secondary text-xs font-weight-bold ">{{$rs->id}}</td>
                            <td>
                                <div class=" px-2 py-1 ">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm ">{{ $rs->title }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" height="250" alt="">
                                @endif
                            </td>
                            <td class="text-uppercase text-secondary text-xs font-weight-bold ">
                                <a href="{{route('admin_image_delete', ['id'=>$rs->id,'content_id'=>$rs->content_id])}}" onclick="return confirm('{{$rs->title}} silinecek. Emin misiniz ?')" ><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
