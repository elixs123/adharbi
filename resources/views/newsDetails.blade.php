@extends('default')

@section('content')

<main id="main" data-aos="fade-up">
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>{{$new->name}}</h2>
    </div>
  </div>
</section>
<section id="portfolio-details" class="portfolio-details">
  <div class="container">
    <div class="row gy-4">
        <hr>
        <div class="col-lg-6" data-aos="fade-right">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
            <img src="{{asset('img/news/'. $new->img)}}" class="w-100" alt="Louvre" />
            
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
        </a>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper">
        <div class="col">
            <div class="">
                <p>{!! $new->description !!}</p>
                <p>{{$new->created_at}}</p>
            </div> 
      </div>
    </div>
  </div>
</section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
@endsection