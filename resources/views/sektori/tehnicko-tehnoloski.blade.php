@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>Tehničko - Tehnološki</h1>
        <img src="{{asset('img/sektoripage/tehnicko/tehničko.png')}}" class="rounded mx-auto d-block" style="width:auto;height:400px;" alt="{{asset('img/sektoripage/tehnicko/tehničko.png')}}">
    </div>
    <div class="row" data-aos="fade-bottom">
        @include('includes.sektori')
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>SEKTOR Tehničko - Tehnološki</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">Tehničko-tehnološki sektor je zadužen za iznalaženje najoptimalnijih i najkvalitetnijih tehnoloških rješenja, kako bi od vlastite ulazne sirovine pirofilitnog škriljca dobili gotov proizvod. Proizvod treba da zadovoljava sve standarde, propise i norme koje važe u predmetnoj oblasti. Sektor je zadužen za pregled i održavanje postrojenja, mašina, opreme, alata i uređaja, te praćenje savremenih tehničko-tehnoloških dostignuća, u cilju unapređenja samog procesa proizvodnje i primjene istih.</p>
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/tehnicko/1 B - Uređaj za elektrohemijsku detekciju polutanata.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/tehnicko/1 B - Uređaj za elektrohemijsku detekciju polutanata.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/tehnicko/7 C - Kompozitni materijal za skladištenje vodonične energija na bazi pirofilita.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/tehnicko/7 C - Kompozitni materijal za skladištenje vodonične energija na bazi pirofilita.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/tehnicko/3 A - Pirofilitni sinter.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/tehnicko/3 A - Pirofilitni sinter.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/tehnicko/4 A - Briketi na bazi pirofilita.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/tehnicko/4 A - Briketi na bazi pirofilita.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/tehnicko/5 A - Sistem za prečišćavanje otpadnih voda.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/tehnicko/5 A - Sistem za prečišćavanje otpadnih voda.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/tehnicko/6 A - Pirofilitna pokrivka na deponijama.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/tehnicko/6 A - Pirofilitna pokrivka na deponijama.jpg')}}"></img></a>
                </div>
        </div>

        </div>
    </div>
  </div>
</section>
@endsection