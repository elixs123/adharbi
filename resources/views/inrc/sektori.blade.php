@extends('default')

@section('content')
<main id="main">

<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1>SEKTORI</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <!--<div class="col-12 col-lg-2">
            <nav class="nav nav-pills flex-column flex-sm-row justify-content-start sticky-top" style="position: sticky !important;">
            <a class="flex-sm-fill text-sm-left nav-link active" aria-current="page" href="#">AGROHARBI</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">FARMACIJA</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">GRAĐEVINA</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">HARBILAB</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">PROIZVODNJA</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">TEHNIČKO-TEHNO</a>
                <a class="flex-sm-fill text-sm-left nav-link" href="#">RUDARSTVO</a>
            </nav>
        </div>-->
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">RUDARSTVO</h5>
                    </div>
                    <a href="{{route('rudarstvo')}}"><img src="{{asset('img/sektori/LOGO RUDARSTVO.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO RUDARSTVO.png')}}"></a>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">TEHNIČKO-TEHNO</h5>
                    </div>
                    <a href="{{route('tehnicko-tehnoloski')}}"><img src="{{asset('img/sektori/LOGO - TEHNIČKO-TEHNOLOŠKI.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - TEHNIČKO-TEHNOLOŠKI.png')}}"></a>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">AGROHARBI</h5>
                    </div>
                    <a href="{{route('agroharbi')}}"><img src="{{asset('img/sektori/LOGO - AGROHARBI.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - AGROHARBI.png')}}"></a>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">FARMACIJA</h5>
                    </div>
                    <a href="{{route('farmacija')}}"><img src="{{asset('img/sektori/LOGO - FARMACIJA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - FARMACIJA.png')}}"></a>
                </div>
                
                
            </div>
            <div class="row mt-2">
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">HARBILAB</h5>
                    </div>
                    <a href="{{route('harbilab')}}"><img src="{{asset('img/sektori/LOGO - HARBILAB.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - HARBILAB')}}"></a>
                </div>
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">PROIZVODNJA</h5>
                    </div>
                    <a href="{{route('proizvodnja')}}"><img src="{{asset('img/sektori/LOGO - PROIZVODNJA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - PROIZVODNJA.png')}}"></a>
                </div>
                
                <div class="card col-12 col-lg-3 p-0 m-0 text-center">
                    <div class="card-header pt-2 harbi-active">
                        <h5 class="card-title pt-2">GRAĐEVINA</h5>
                    </div>
                    <a href="{{route('gradjevina')}}"><img src="{{asset('img/sektori/LOGO - GRAĐEVINA.png')}}" class="card-img-top" alt="{{asset('img/sektori/LOGO - GRAĐEVINA.png')}}"></a>
                </div>
            </div>
            
        </div>
    </div>
  </div>
</section>
@endsection