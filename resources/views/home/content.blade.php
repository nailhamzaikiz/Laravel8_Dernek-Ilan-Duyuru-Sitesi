@extends('layouts.home')


@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords',$setting->keywords)

@section('content')

    <div class="card card-body container col-md-6 offset-md-1 mt-5" >

        <!-- İçerik -->
        <h3 class="title text-center">{{$data->title}}</h3>
        <hr class="mb-4">
        <div class="row">
            <div class="col-8 offset-1 ">
                <img class="mb-3 " src="{{Storage::url($data->image)}}" width="300px" alt="">
                <p class="mt-3">{!! $data->detail !!}</p>
            </div>
        </div>
        <!-- İçerik sonu -->
        <!-- Slider -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            @foreach($slider as $rs)
                <div class="mySlides ">
                    <div class="numbertext"></div>
                    <img src="{{Storage::url($rs->image)}}" style="height:400px;width: 400px">
                    <div class="text bg-dark">{{$rs->title}}</div>
                </div>
            @endforeach
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->


        <!-- Slider Sonu -->
        <!-- Yorumlar-->
        <h3 class="title text-center">Yorumlar</h3>
        <hr class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="card card-plain h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Yorumlar</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                @foreach($reviews as $rs)
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$rs->user_id}}</h6>
                                            <p class="mb-0 text-xs">{{$rs->review}}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @livewire('review',['id'=>$data->id])
            </div>
        </div>
    </div>
    <!-- Slideshow container -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>

@endsection
