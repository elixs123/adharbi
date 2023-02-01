@extends('default')

@section('content')
<section id="portfolio" class="portfolio">

<div class="container">
  <div class="section-title" data-aos="fade-up">
    <h2>{{ __('onama.gallery') }}</h2>
    
  </div>
  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($years as $year)
          <li class="nav-item" role="presentation">
            @if(!request()->has('godina'))
              <a class="nav-link" style="color:black;" id="home-tab" href="?godina={{$year->year}}">{{$year->year}}</a>
            @else
              <a class="nav-link {{ request()->input('godina') === $year->year ? 'harbi-active' : '' }}" style="color:black;" id="home-tab" href="?godina={{$year->year}}">{{$year->year}}</a>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    @foreach($gallerys as $gallery)
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap gallery-box">
        <img src="{{asset('img/gallery/' . $gallery->img)}}" class="img-fluid gallery-img" alt="{{asset('img/gallery/' . $gallery->img)}}">
          <a href="{{asset('img/gallery/' . $gallery->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
        <div class="portfolio-info">
          <div class="portfolio-links">
            <a href="{{asset('img/gallery/' . $gallery->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
          </div>
        </div>
        <div class="img-text" style="z-index: 100;height: 50px;position: absolute;bottom: 0px;width: 100%; text-align: left;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.5);border-color: rgb(24, 17, 12);width: 100%;border-color: rgba(24, 17, 12);">
          @if(app()->getLocale() == 'ba')
            <h3 style="text-transform: uppercase;font-size: 11px;color: #fff;margin: 0;padding: 13px;">{{$gallery->ba}}</h3>
          @elseif(app()->getLocale() == 'en')
            <h3 style="text-transform: uppercase;font-size: 11px;color: #fff;margin: 0;padding: 13px;">{{$gallery->en}}</h3>
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{ $gallerys->withQueryString()->links() }}
</div>
</section>

@endsection