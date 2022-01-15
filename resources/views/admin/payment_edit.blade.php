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
                        <h6 class="text-white text-capitalize ps-3">Ödeme Düzenle</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class=" p-0">
                        <form action="{{route('admin_payment_update',['id'=>$data->user_id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label  class="font-weight-bold">Yıl</label>
                                <input class="form-control border border-info px-2" name="year" id="year" type="text" value="{{$data->year}}">
                            </div>
                            <div class="form-group">
                                <label  class="font-weight-bold">Ödeme</label>
                                <input class="form-control border border-info px-2" name="payment" id="payment" type="text" value="{{$data->payment}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Admin Notu</label>
                                <textarea class="form-control border border-info px-2"  name="note" id="summernote" >{{$data->note}}</textarea>
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
                            <button href="{{route('admin_payment_store')}}" type="submit" class="btn btn-info shadow-dark">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
