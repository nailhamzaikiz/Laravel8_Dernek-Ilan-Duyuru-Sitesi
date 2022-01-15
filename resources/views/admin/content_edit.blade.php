@extends('layouts.admin')

@section('title','Düzenle')
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
                        <h6 class="text-white text-capitalize ps-3">İçerik Düzenle</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class=" p-0">
                        <form action="{{route('admin_content_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Düzenle</label>
                                <select class="form-select border border-info px-2" value="0" id="menu_id" name="menu_id">
                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id==$data->menu_id) selected="selected" @endif>{{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label  class="font-weight-bold">Başlık</label>
                                <input class="form-control border border-info px-2" name="title" id="title" type="text" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Anahtar Kelimeler</label>
                                <input class="form-control border border-info px-2" name="keywords" id="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Açıklama</label>
                                <input class="form-control border border-info px-2" name="description" id="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Resim</label>
                                <input type="file" class="form-control border border-info px-2" name="image" id="image">
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="60" class="px-3" alt="">
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold" >Tür</label>
                                <select class="form-select border border-info px-2" value="0" name="type" id="type">
                                    @foreach ($datalist as $rs)
                                        <option value="{{($rs->id)}}">{{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Detay</label>
                                <textarea class="form-control border border-info px-2"  name="detail" id="summernote" >{{$data->detail}}</textarea>
                                <script>
                                    $('#summernote').summernote({
                                        placeholder: 'Hello stand alone ui',
                                        tabsize: 2,
                                        height: 120,
                                        toolbar: [
                                            ['style', ['style']],
                                            ['font', ['bold', 'underline', 'clear']],
                                            ['color', ['color']],
                                            ['para', ['ul', 'ol', 'paragraph']],
                                            ['table', ['table']],
                                            ['insert', ['link', 'picture', 'video']],
                                            ['view', ['fullscreen', 'codeview', 'help']]
                                        ]
                                    });
                                </script>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Status</label>
                                <select class="form-select border border-info px-2 " name="status" id="status" >
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button href="/edit" type="submit" class="btn btn-info shadow-dark">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
