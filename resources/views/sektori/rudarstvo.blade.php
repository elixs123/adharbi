@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>RUDARSTVO I GEOLOGIJA</h1>
        <img src="{{asset('img/sektoripage/rudarstvo.png')}}" class="rounded mx-auto d-block" style="width:auto;height:400px;" alt="{{asset('img/sektoripage/rudarstvo.png')}}">
    </div>
    <div class="row" data-aos="fade-bottom">
        @include('includes.sektori')
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>SEKTOR RUDARSTVO I GEOLOGIJA</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">{{ __('rudarstvo.text1') }}</p>
                    <p style="color:black; font-size:16px;" class="elix-justify">{{ __('rudarstvo.text2') }}</p>
                    <p style="color:black; font-size:16px;" class="elix-justify">{{ __('rudarstvo.text3') }}</p>
                    <p style="color:black; font-size:16px;" class="elix-justify">{{ __('rudarstvo.text4') }}</p>
                    <p style="color:black; font-size:16px;" class="elix-justify">{{ __('rudarstvo.text5') }}</p>
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/karta.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/karta.png')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/rud1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/rud1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/rud2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/rud2.jpg')}}"></img></a>
                </div>
        </div>

        </div>
    </div>
  </div>
</section>
@endsection