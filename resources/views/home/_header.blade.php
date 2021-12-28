@php
//$setting=[\App\Http\Controllers\HomeController::class,'getsetting'];
@endphp
<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="" rel="tooltip" data-placement="bottom" target="_blank">
                        Dernek Duyuru Sitesi
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item mx-2 ">
                                <a class="nav-link" href=""><i class="fas fa-home opacity-6 me-2 text-md "></i>Ana Sayfa</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href=""><i class="far fa-newspaper opacity-6 me-2 text-md"></i>Haberler</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href=""><i class="fas fa-bullhorn opacity-6 me-2 text-md"></i>Duyurular</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href=""><i class="fas fa-award opacity-6 me-2 text-md"></i>Etkinlikler</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href=""><i class="fas fa-images opacity-6 me-2 text-md "></i>Galeri</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href=""><i class="far fa-comment-alt opacity-6 me-2 text-md "></i>İletişim</a>
                            </li>
                            <li class="nav-item my-auto ms-3 ms-lg-0 dropdown dropdown-hover">
                                <a href="/admin/login" class="btn btn-sm btn-outline-info text-nowrap mb-0"  >Oturum Aç</a>
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-0">
                                        <a href="{{route('register')}}">Kayıt Ol</a>
                                    </h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->
<div class="page-header min-vh-50"  style="background-image: url('https://images.unsplash.com/photo-1630752708689-02c8636b9141?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2490&q=80')">
    <span class="mask bg-gradient-dark opacity-6"></span>

    <!-- <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-white">Your title here</h1>
            <h3 class="text-white">Subtitle</h3>
          </div>
        </div>
      </div> -->
</div>
</div>
