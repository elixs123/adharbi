@extends('default')

@section('content')
<main id="main">
    <div class="container elix-justify">
        <div class="section-title" data-aos="fade-up">
            <h1>{{ __('onama.historijat') }}<h1>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-left">
                <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <p>{{ __('onama.text_historijat_1') }}{{ __('onama.text_historijat_2') }}</p>
                    
                    <p>{{ __('onama.text_historijat_3') }}</p>
                </div>
                <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <p>{{ __('onama.text_historijat_4') }}{{ __('onama.text_historijat_5') }} {{ __('onama.text_historijat_6') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4" data-aos="fade-left">
                <div class="image">
                    <img src="{{asset('img/historijat1.jpg')}}" class="img-fluid" style="width:auto; height: 400px;" alt="{{asset('img/historijat1.jpg')}}">
                    
                    <a href="{{asset('img/historijat1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{asset('img/historijat1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-right">
                <div class="image">
                    <img src="{{asset('img/historijat0.jpg')}}" class="img-fluid" style="width:auto; height: 400px;" alt="{{asset('img/historijat0.jpg')}}">
                    
                    <a href="{{asset('img/historijat0.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{asset('img/historijat0.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection