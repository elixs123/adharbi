@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>PROIZVODNJA</h1>
        <img src="{{asset('img/sektoripage/proizvodnja/proizvodnja.png')}}" class="rounded mx-auto d-block" style="width:auto;height:400px;" alt="{{asset('img/sektoripage/proizvodnja/proizvodnja.png')}}">
    </div>
    <div class="row" data-aos="fade-bottom">
        @include('includes.sektori')
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>SEKTOR PROIZVODNJA</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">Sektor proizvodnje zadužen je za realizaciju zadanih proizvodnih ciljeva gdje su osnovne sirovine iz vlastitih izvora. Proizvodnja obuhvata realizaciju kako serijskih proizvoda, tako i izradu uzoraka.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>Mašine za preradu mikroniziranog pirofilitnog škriljca</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">Sektor proizvodnje zadužen je za realizaciju zadanih proizvodnih ciljeva gdje su osnovne sirovine iz vlastitih izvora. Proizvodnja obuhvata realizaciju kako serijskih proizvoda, tako i izradu uzoraka.</p>
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1A/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1A/1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1A/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1A/2.jpg')}}"></img></a>
                </div>
        </div>

        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>Proizvodne linije za različite proizvode</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">PD AD Harbi d.o.o. Sarajevo u sklopu svojih proizvodnih aktivnosti vrši izradu PVC/ALU stolarije, kako za vlastite tako i za potrebe tržište.</p>
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1B/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1B/1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1B/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1B/2.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1B/3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1B/3.jpg')}}"></img></a>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>Proizvodna linija za izradu PVC/ALU programa</h4>
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1C/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1C/1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/proizvodnja/1C/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/proizvodnja/1C/2.jpg')}}"></img></a>
                </div>
        </div>

        </div>
    </div>
  </div>
</section>
@endsection