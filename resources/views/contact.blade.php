@extends('default')

@section('content')
<section id="contact" class="contact mt-2">
  <div class="container">
    <div class="section-title">
      <h1>{{ __('contact.kontakt') }}</h1>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>{{ __('contact.lokacija') }}:</h4>
            <p>Tvornička 3 71210 Ilidža / Sarajevo</p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>{{ __('contact.email') }}:</h4>
            <p>info@adharbi.ba</p>
          </div>
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>{{ __('contact.telefon') }}:</h4>
            <p>+387 33 629 883<br>+387 61 153 421<br>+387 36 740 288</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8 mt-5 mt-lg-0">
        @if(Session::has('message'))
        <div class="alert alert-warning alert-dismissible fade show container mt-2 harbi-active" role="alert">
            <strong>{{Session::get('message')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{route('contact')}}" method="post" data-aos="fade-left">
            @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('contact.tvoje_ime') }}" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('contact.tvoj_email') }}" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('contact.predmet') }}" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="{{ __('contact.poruka') }}" required></textarea>
          </div>
          <button type="submit" class="btn btn-success mt-2">{{ __('contact.posalji') }}</button>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

@endsection