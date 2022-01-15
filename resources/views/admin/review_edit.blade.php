<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets')}}admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('assets')}}/admin/assets/img/favicon.png">
    <title>
        @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets')}}/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link id="pagestyle" href="{{asset('assets')}}/admin/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('css')
    @yield('javascript')
</head>
@section('javascript')
    <!-- include summernote without bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

@endsection
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    @include('home.message')
                    <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Yorum Detayı</h6>
                    </div>
                </div>
                <div class="card-body ">
                    <div class=" p-0">
                        <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table align-items-center mb-0 ">
                                <thead>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">Id</th>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">İsim</th>
                                        <td class="text-secondary text-xs font-weight-bold ">{{$data->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">İçerik</th>
                                        <td class="text-xs font-weight-bold ">{{$data->content->title}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">Konu</th>
                                        <td class="text-xs font-weight-bold ">{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">Yorum</th>
                                        <td class="text-xs font-weight-bold ">{{$data->review}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">IP</th>
                                        <td class="text-xs font-weight-bold ">{{$data->IP}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">Oluşturulma Tarihi</th>
                                        <td class="text-xs font-weight-bold ">{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bold ">Güncelleme Tarihi</th>
                                        <td class="text-xs font-weight-bold ">{{$data->updated_at}}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-dark text-s font-weight-bolder ">Status</th>
                                        <td class="text-xs font-weight-bold border-info">
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option >True</option>
                                                <option >False</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button href="{{route('admin_message_update',['id'=>$data->id])}}" type="submit" class="btn btn-info shadow-dark">Kaydet</button>
                                        </td>

                                    </tr>

                                </thead>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

