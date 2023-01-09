@extends('default')

@section('content')
<section id="portfolio" class="portfolio">

<div class="container">
  <div class="section-title" data-aos="fade-up">
    <h1>Otvorene pozicije</h1>
  </div>
  <div class="row">
    @forelse($alljobs as $job)
        <div class="card col-4 p-0 m-0">
            <img src="{{asset('img/jobs/' . $job->img)}}" class="card-img-top p-0 m-0" alt="{{asset('img/jobs/' . $job->img)}}">
            <div class="card-body">
                <p class="card-text fw-bold">Pozicija: {{ $job->name}}</p>
                <p class="card-text">Traje do: {{ $job->date}}</p>
                <hr>
                <a href="{{route('openjobsdetails', ['id' => $job->id])}}" class="btn btn-success">Pogledaj</a>
            </div>
        </div>
    @empty
        <h2 class="text-center fw-bold text-danger">Nema otvoreni pozicija</h2>
    @endforelse
  </div>
</div>
</section>

@endsection