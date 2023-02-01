@extends('default')

@section('content')
<main id="main">

<section id="about" class="about">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>{{ __('home.nekoliko') }}</h2>
    </div>
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="image">
          <img src="assets/img/Direktor.jpg" style="width:100%; height:50%;"  alt="">
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 elix-justify">
          <p>{{ __('home.text_pocetna_1') }}</p>
          <p>{{ __('home.text_pocetna_2') }}</p>
          <p>{{ __('home.text_pocetna_3') }}</p>
          <p>{{ __('home.text_pocetna_4') }}<br>{{ __('home.text_pocetna_5') }}</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->

@endsection