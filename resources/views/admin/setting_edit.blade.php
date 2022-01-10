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
                        <h6 class="text-white text-capitalize ps-3">Site Ayarları</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class=" p-0">
                        <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label class="font-weight-bold">ID</label>
                                <input class="form-control border border-info px-2" name="id" id="id" type="hidden" value="{{$data->id}}">
                            </div>

                            <div class="form-group">
                                <label  class="font-weight-bold">Başlık</label>
                                <input class="form-control border border-info px-2" name="title" id="title" value="{{$data->title}}">
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
                                <label for="exampleInputPassword1" class="font-weight-bold">Şirket</label>
                                <input class="form-control border border-info px-2" name="company" id="company" value="{{$data->company}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Adres</label>
                                <input class="form-control border border-info px-2" name="address" id="address" value="{{$data->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Telefon</label>
                                <input class="form-control border border-info px-2" name="phone" id="phone" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Faks</label>
                                <input class="form-control border border-info px-2" name="fax" id="fax" value="{{$data->fax}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Email</label>
                                <input class="form-control border border-info px-2" name="email" id="email" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Smtp Server</label>
                                <input class="form-control border border-info px-2" name="smtpserver" id="smtpserver" value="{{$data->smtpserver}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Smtp Email</label>
                                <input class="form-control border border-info px-2" name="smtpemail" id="smtpemail" value="{{$data->smtpemail}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Smtp Şifre</label>
                                <input class="form-control border border-info px-2" type="password" name="smtppassword" id="smtppassword" value="{{$data->smtppassword}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Smtp Port</label>
                                <input class="form-control border border-info px-2" name="smtpport" id="smtpport" value="{{$data->smtpport}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Facebook</label>
                                <input class="form-control border border-info px-2" name="facebook" id="facebook" value="{{$data->facebook}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">İnstagram</label>
                                <input class="form-control border border-info px-2" name="instagram" id="instagram" value="{{$data->instagram}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Twitter</label>
                                <input class="form-control border border-info px-2" name="twitter" id="twitter" value="{{$data->twitter}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Youtube</label>
                                <input class="form-control border border-info px-2" name="youtube" id="youtube" value="{{$data->youtube}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">WhatsApp</label>
                                <input class="form-control border border-info px-2" name="whatsapp" id="whatsapp" value="{{$data->whatsapp}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Hakkımızda</label>
                                <textarea class="form-control border border-info px-2"  name="aboutus" id="aboutus" >{{$data->aboutus}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">İletişim</label>
                                <textarea class="form-control border border-info px-2"  name="contact" id="contact" >{{$data->contact}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Referanslar</label>
                                <textarea class="form-control border border-info px-2"  name="references" id="references" >{{$data->references}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Status</label>
                                <select class="form-select border border-info px-2 " name="status" id="status" >
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button href="/setting/update" type="submit" class="btn btn-info shadow-dark">Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#aboutus').summernote({
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
        $('#contact').summernote({
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
        $('#references').summernote({
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
@endsection
