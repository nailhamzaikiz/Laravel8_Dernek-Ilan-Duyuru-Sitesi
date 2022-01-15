<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header active bg-gradient-info">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="{{ Auth::user()->profile_photo_url }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white ">
                @auth
                     Merhaba, {{Auth::user()->name}}
                @endauth
            </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white " href="/admin/menu">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">menu</i>
                    </div>
                    <span class="nav-link-text ms-1">Menu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="/admin/content">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">speaker_notes</i>
                    </div>
                    <span class="nav-link-text ms-1">İçerik</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('admin_message')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">contact_mail</i>
                    </div>
                    <span class="nav-link-text ms-1">İletişim Mesajları</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('admin_review')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">reviews</i>
                    </div>
                    <span class="nav-link-text ms-1">Yorumlar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('admin_faq')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">question_answer</i>
                    </div>
                    <span class="nav-link-text ms-1">Sıkça Sorulan Sorular</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('admin_payment')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">paid</i>
                    </div>
                    <span class="nav-link-text ms-1">ödemeler</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="/admin/setting">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1">Site Ayarları</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('assets')}}/admin/pages/profile.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('assets')}}/admin/pages/sign-in.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">login</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{asset('assets')}}/admin/pages/sign-up.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
        </div>
    </div>
</aside>

