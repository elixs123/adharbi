@extends('default')

@section('content')
<section id="portfolio" class="portfolio">

<div class="container">
  <div class="section-title" data-aos="fade-up">
    <h2>{{ __('onama.gallery') }}</h2>
    
  </div>
  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
    </div>
  </div>
  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    @foreach($gallerys as $gallery)
    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
      <div class="portfolio-wrap gallery-box">
        <img src="{{asset('img/gallery/' . $gallery->img)}}" class="img-fluid gallery-img" alt="{{asset('img/gallery/' . $gallery->img)}}">
          <a href="{{asset('img/gallery/' . $gallery->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
        <div class="portfolio-info">
          <div class="portfolio-links">\
            <a href="{{asset('img/gallery/' . $gallery->img)}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><span class="link"></span></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{ $gallerys->links() }}
</div>
</section>

@endsection