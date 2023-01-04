@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>Tehničko - Tehnološki</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-12 col-lg-2">
            <nav class="nav nav-pills flex-column flex-sm-row justify-content-start" style="position: sticky !important;">
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">AGROHARBI</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">FARMACIJA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">GRAĐEVINA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">HARBILAB</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">PROIZVODNJA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black  harbi-active" href="#">TEHNIČKO-TEHNO</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">RUDARSTVO</a>
            </nav>
        </div>
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;">Tehničko-tehnološki sektor je zadužen za iznalaženje najoptimalnijih i najkvalitetnijih tehnoloških rješenja, kako bi od vlastite ulazne sirovine pirofilitnog škriljca dobili gotov proizvod. Proizvod treba da zadovoljava sve standarde, propise i norme koje važe u predmetnoj oblasti. Sektor je zadužen za pregled i održavanje postrojenja, mašina, opreme, alata i uređaja, te praćenje savremenih tehničko-tehnoloških dostignuća, u cilju unapređenja samog procesa proizvodnje i primjene istih.</p>
              </div>
            </div>
            <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100"><a href="{{asset('img/sektoripage/tehnicko/tehničko.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:auto;" src="{{asset('img/sektoripage/tehnicko/tehničko.png')}}"></img></a>
            </div>
        </div>
        <!--DRUGI DIO-->
        <div class="row mt-5">
            <div class="col-lg-12">
              
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/tehnicko/1 B - Uređaj za elektrohemijsku detekciju polutanata.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/tehnicko/7 C - Kompozitni materijal za skladištenje vodonične energija na bazi pirofilita.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/tehnicko/3 A - Pirofilitni sinter.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/tehnicko/4 A - Briketi na bazi pirofilita.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/tehnicko/5 A - Sistem za prečišćavanje otpadnih voda.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/tehnicko/6 A - Pirofilitna pokrivka na deponijama.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</section>
@endsection