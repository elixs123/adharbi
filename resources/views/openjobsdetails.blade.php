@extends('default')

@section('content')
<section id="portfolio" class="portfolio">

<div class="container">
  <div class="section-title" data-aos="fade-up">
    <h1>Pozicija {{ $job->name}}</h1>
  </div>
  <div class="row">
    <div class="card col-12 p-0 m-0">
        <img src="{{asset('img/jobs/' . $job->img)}}" class="card-img-top p-0 m-0" alt="{{asset('img/jobs/' . $job->img)}}">
        <div class="card-body">
            <p class="card-text">{!! $job->opis !!}</p>
            <hr>
            <a href="{{route('prijavazaposao')}}" class="btn btn-success">Prijavi se</a>
        </div>
    </div>
   
  </div>
</div>
</section>

@endsection