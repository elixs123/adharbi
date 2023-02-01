@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>GRAĐEVINA</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        @include('includes.sektori')
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                <p style="color:black; font-size:16px;" class="elix-justify">Djelatnost sektora građevinarstva obuhvata sve građevinske poslove na projektovanju i izgradnji novih objekata, kao i rekonstrukciji i održavanju postojećih, a koji se nalaze na lokacijama koje koristi PD AD HARBI d.o.o. Sarajevo.</p>
            </div>
            </div>
            <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100"><a href="{{asset('img/sektoripage/gradjevina/gradjevina.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:auto;" src="{{asset('img/sektoripage/gradjevina/gradjevina.png')}}"></img></a>
            </div>
        </div>
        <!--DRUGI DIO-->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="50000">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/gradjevina/1A/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/gradjevina/1A/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/gradjevina/2A/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/gradjevina/2A/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/gradjevina/3A/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/gradjevina/3A/2.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</section>
@endsection