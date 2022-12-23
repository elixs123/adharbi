@extends('default')

@section('content')
<main id="main">

<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1>SEKTORI</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-12 col-lg-2">
            <nav class="nav nav-pills flex-column flex-sm-row justify-content-start sticky-top" style="position: sticky !important;">
            <a class="flex-sm-fill text-sm-left nav-link active" aria-current="page" href="#">AGROHARBI</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">FARMACIJA</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">GRAĐEVINA</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">HARBILAB</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">PROIZVODNJA</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">TEHNIČKO-TEHNO</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">RUDARSTVO</a>
            </nav>
        </div>
        <div class="col-12 col-lg-10">
            <div class="row">
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">AGROHARBI</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO - AGROHARBI.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - AGROHARBI.png')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">FARMACIJA</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO - FARMACIJA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - FARMACIJA.png')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">GRAĐEVINA</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO - GRAĐEVINA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - GRAĐEVINA.png')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">HARBILAB</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO - HARBILAB.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - HARBILAB')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">PROIZVODNJA</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO - PROIZVODNJA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - PROIZVODNJA.png')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">TEHNIČKO-TEHNO</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO - TEHNIČKO-TEHNOLOŠKI.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - TEHNIČKO-TEHNOLOŠKI.png')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2">
                        <h5 class="card-title">RUDARSTVO</h5>
                    </div>
                    <img src="{{asset('img/sektori/LOGO RUDARSTVO.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO RUDARSTVO.png')}}">
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Pogledaj sektor</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  </div>
</section>
@endsection