<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Profilim</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.0" rel="stylesheet" />



</head>



<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar bg-white navbar-expand-lg border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="" rel="tooltip" data-placement="bottom" target="_blank">
                        Profilim
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
                                <a class="nav-link" href="/"><i class="fas fa-home opacity-6 me-2 text-md "></i>Ana Sayfa</a>
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
                                <a href="" class="btn btn-sm btn-outline-info text-nowrap mb-0"  >Oturum Aç</a>
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-0">
                                        <a href="">Kayıt Ol</a>
                                        </h>
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
<div class="page-header min-vh-20"  style="background-image: url('vhttps://images.unsplash.com/photo-1630752708689-02c8636b9141?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2490&q=80')">
    <span class="mask bg-gray-400 opacity-6"></span>

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
<body class="index-page bg-gray-400" >
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 ">
    <div class="row">
        <div class="container col-md-6 " >
            <!-- İçerik -->
            @include('profile.show')
            <!-- İçerik sonu -->
        </div>
    </div>
</div>
</body>

</div>

<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <a href="https://www.creative-tim.com/product/material-kit">
                        <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
                    </a>
                    <h6 class="font-weight-bolder mb-4">Dernek İlan Sitesi</h6>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                <i class="fab fa-dribbble text-lg opacity-8"></i>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                <i class="fab fa-github text-lg opacity-8"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                                Freebies
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                                Premium Tools
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                Blog
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Resources</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://iradesign.io/" target="_blank">
                                Illustrations
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                                Bits & Snippets
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                                Affiliate Program
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Help & Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                                Knowledge Center
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                                Custom Development
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                                Sponsorships
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                                Terms & Conditions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                Licenses (EULA)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        © <script>document.write(new Date().getFullYear())</script> Nail Hamza İKİZ</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>



<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./assets/js/plugins/countup.min.js"></script>





<script src="./assets/js/plugins/choices.min.js"></script>



<script src="./assets/js/plugins/prism.min.js"></script>
<script src="./assets/js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="./assets/js/plugins/choices.min.js"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="./assets/js/plugins/parallax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>










<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->

<script src="./assets/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>


<script type="text/javascript">

    if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        };
    }
</script>



</html>
