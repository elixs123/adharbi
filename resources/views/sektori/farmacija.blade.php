@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>FARMACIJA </h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-12 col-lg-2">
            <nav class="nav nav-pills flex-column flex-sm-row justify-content-start" style="position: sticky !important;">
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">AGROHARBI</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black harbi-active" href="#">FARMACIJA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">GRAĐEVINA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">HARBILAB</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">PROIZVODNJA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">TEHNIČKO-TEHNO</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">RUDARSTVO</a>
            </nav>
        </div>
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <p style="color:black; font-size:16px;" class="elix-justify">Obzirom da u BiH i širem regionu postoji više farmaceutskih industrija koje trenutno uvoze srodne sirovine za proizvodne procese, korištenjem pirofilita kao domaće sirovine smanjio bi se uvoz takvih sirovina i povećao izvoz domaćih gotovih proizvoda.</p>
            </div>

            <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="100">
                <p style="color:black; font-size:16px;" class="elix-justify">Dosadašnjim istraživanjima dokazana je prednost korištenja pirofilita u odnosu na talk, te se isti koristiti kao bolje rješenje od talka u farmaciji i medicini.U lijekovima se koristi kao nosač aktivnih tvari. Sinteri na bazi pirofilita se koriste kao prirodni materijali za izradu protetičkih pomagala u okviru interdiciplinarne stomatološke struke. U kozmetici se koristi kao osnovna sirovina za izradu organskih sapuna, krema, pilinga za lice i tijelo, peloida, maski za lice, masti za opekotine, zaštitnih maski, kao mineralni puder za neutralizaciju neugodnih mirisa na tijelu, kao sredstvo za zaštitu krznenih životinja od insekata itd.</p>
            </div>
            </div>
            <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100"><a href="{{asset('img/sektoripage/karta.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:auto;" src="{{asset('img/sektoripage/farmacija/farmacija.png')}}"></img></a>
            </div>
        </div>
        <!--DRUGI DIO-->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="50000">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1A/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1A/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1A/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1A/4.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1A/5.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1A/6.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1B/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1B/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1B/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/farmacija/1B/4.jpg')}}" class="d-block w-100">
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