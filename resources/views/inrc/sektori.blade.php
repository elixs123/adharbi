@extends('default')

@section('content')
<main id="main">

<section id="about" class="about">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1>SEKTORI</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="card col-3 p-0 m-0 text-center">
            <div class="card-header pt-2">
                <h5 class="card-title">AGROHARBI</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO - AGROHARBI.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - AGROHARBI.png')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
        <div class="card col-3 p-0 m-0 text-center ms-2">
            <div class="card-header pt-2">
                <h5 class="card-title">FARMACIJA</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO - FARMACIJA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - FARMACIJA.png')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
        <div class="card col-3 p-0 m-0 text-center ms-2">
            <div class="card-header pt-2">
                <h5 class="card-title">GRAĐEVINA</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO - GRAĐEVINA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - GRAĐEVINA.png')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
    </div>
    <div class="row mt-2"  data-aos="fade-top">
        <div class="card col-3 p-0 m-0 text-center">
            <div class="card-header pt-2">
                <h5 class="card-title">HARBILAB</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO - HARBILAB.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - HARBILAB')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
        <div class="card col-3 p-0 m-0 text-center ms-2">
            <div class="card-header pt-2">
                <h5 class="card-title">PROIZVODNJA</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO - PROIZVODNJA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - PROIZVODNJA.png')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
        <div class="card col-3 p-0 m-0 text-center ms-2">
            <div class="card-header pt-2">
                <h5 class="card-title">TEHNIČKO-TEHNOLOŠKI</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO - TEHNIČKO-TEHNOLOŠKI.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - TEHNIČKO-TEHNOLOŠKI.png')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
    </div>
    <div class="row mt-2"  data-aos="fade-top">
        <div class="card col-3 p-0 m-0 text-center">
            <div class="card-header pt-2">
                <h5 class="card-title">LOGO RUDARSTVO</h5>
            </div>
            <img src="{{asset('img/sektori/LOGO RUDARSTVO.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO RUDARSTVO.png')}}">
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Pogledaj sektor</a>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection