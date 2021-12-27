@extends('layouts.admin')

@section('title','Ekle')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Menü Ekle</h6>
                    </div>
                </div>
                <div class="card-body px-5 pb-2">
                    <div class=" p-0">
                        <form action="{{route('admin_menu_create')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Ana Kategori</label>
                                <select class="form-select border border-info px-2" value="0" id="parent_id" name="parent_id">
                                    @foreach ($datalist as $rs)
                                        <option value="{{$rs->id}}">{{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label  class="font-weight-bold">Başlık</label>
                                <input class="form-control border border-info px-2" name="title" id="title" type="text" placeholder="Başlık">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Anahtar Kelimeler</label>
                                <input class="form-control border border-info px-2" name="keywords" id="keywords" placeholder="Anahtar Kelimeleri Girin">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="font-weight-bold">Açıklama</label>
                                <input class="form-control border border-info px-2" name="description" id="description" placeholder="Açıklama Girin">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Status</label>
                                <select class="form-select border border-info px-2 " name="status" id="status" >
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button href="/create" type="submit" class="btn btn-info shadow-dark">Menü Ekle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
