@php
    //$setting=[\App\Http\Controllers\HomeController::class,'getsetting'];
@endphp
<footer class="footer pt-5 mt-5">
    <div class="container">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <h6 class="font-weight-bold mb-4">Dernek İlan Sitesi</h6>
                    <p class="font-weight-bolder mb-4">{{$setting->address}}</p>
                </div>
                <div>
                    <ul class="d-flex flex-row ms-n3 nav">
                        @if($setting->facebook != null)
                        <li class="nav-item">
                            <a class="nav-link pe-1" href="{{$setting->facebook}}" target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8"></i>
                            </a>
                        </li>
                        @endif
                        @if($setting->twitter != null)
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="{{$setting->twitter}}" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>
                        @endif
                        @if($setting->instagram != null)
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="{{$setting->instagram}}" target="_blank">
                                    <i class="fab fa-instagram text-lg opacity-8"></i>
                                </a>
                            </li>
                        @endif
                        @if($setting->youtube != null)
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="{{$setting->youtube}}" target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        @endif
                        @if($setting->whatsapp != null)
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="{{$setting->whatsapp}}" target="_blank">
                                    <i class="fab fa-whatsapp text-lg opacity-8"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>



            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Şirket</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}" target="_blank">
                                Hakkımızda
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="text-sm">Yardım & Destek</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}" target="_blank">
                                Bize Ulaşın
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('references')}}" target="_blank">
                                Referanslarımız
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="text-sm">Sorular</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faq')}}" target="_blank">
                                Sıkça Sorulan Sorular
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12">
                <div class="text-center">
                    <p class="text-dark my-4 text-sm font-weight-normal">
                        © <script>document.write(new Date().getFullYear())</script>, Tüm Hakları Saklıdır {{$setting->company}}</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="{{url('assets/js/core/popper.min.js" ')}}" type="text/javascript"></script>
<script src="{{url('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{url('assets/js/plugins/countup.min.js')}}"></script>





<script src="{{url('assets/js/plugins/choices.min.js')}}"></script>



<script src="{{url('assets/js/plugins/prism.min.js')}}"></script>
<script src="{{url('assets/js/plugins/highlight.min.js')}}"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{url('assets/js/plugins/rellax.min.js')}}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{url('assets/js/plugins/tilt.min.js')}}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{url('assets/js/plugins/choices.min.js')}}"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{url('assets/js/plugins/parallax.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>










<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->

<script src="{{url('assets/js/material-kit.min.js?v=3.0.0')}}" type="text/javascript"></script>


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
