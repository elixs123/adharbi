@extends('default')

@section('content')
<div class="container">
  <div class="section-title" data-aos="fade-up">
    <h2>Novosti</h2>
  </div>
  <div class="row" data-aos="fade-up">
    <div class="col-lg-12 d-flex justify-content-center">
    </div>
  </div>
  <div class="row portfolio-container">
    @foreach($news as $new)
    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
       <a href="novostilink.html"> <img src="{{asset('img/news/'. $new->img)}}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <b><h5>{{$new->name}}</h5><a></b>
          <p style="font-size:12px;"><?php echo $new->description ?><a href="#">Procitaj više</a></p><a>
          <p style="font-size:10px;">{{$new->created_at->format('d.m.Y H:i')}}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection