@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>FARMACIJA</h1>
        <img src="{{asset('img/sektoripage/farmacija/farmacija.png')}}" class="rounded mx-auto d-block" style="width:auto;height:400px;" alt="{{asset('img/sektoripage/farmacija/farmacija.png')}}">
    </div>
    <div class="row" data-aos="fade-bottom">
        @include('includes.sektori')
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>SEKTOR FARMACIJA</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">Obzirom da u BiH i širem regionu postoji više farmaceutskih industrija koje trenutno uvoze srodne sirovine za proizvodne procese, korištenjem pirofilita kao domaće sirovine smanjio bi se uvoz takvih sirovina i povećao izvoz domaćih gotovih proizvoda.</p>
                    <p style="font-size:16px;" class="elix-justify">Dosadašnjim istraživanjima dokazana je prednost korištenja pirofilita u odnosu na talk, te se isti koristiti kao bolje rješenje od talka u farmaciji i medicini.U lijekovima se koristi kao nosač aktivnih tvari. Sinteri na bazi pirofilita se koriste kao prirodni materijali za izradu protetičkih pomagala u okviru interdiciplinarne stomatološke struke. U kozmetici se koristi kao osnovna sirovina za izradu organskih sapuna, krema, pilinga za lice i tijelo, peloida, maski za lice, masti za opekotine, zaštitnih maski, kao mineralni puder za neutralizaciju neugodnih mirisa na tijelu, kao sredstvo za zaštitu krznenih životinja od insekata itd.</p>
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1A/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1A/1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1A/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1A/2.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1A/3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1A/3.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1A/4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1A/4.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1A/5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1A/5.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1A/6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1A/6.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1B/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1B/1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/farmacija/1B/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/farmacija/1B/2.jpg')}}"></img></a>
                </div>
        </div>

        </div>
    </div>
  </div>
</section>
@endsection