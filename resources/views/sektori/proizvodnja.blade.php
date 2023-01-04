@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>PROIZVODNJA</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-12 col-lg-2">
            <nav class="nav nav-pills flex-column flex-sm-row justify-content-start" style="position: sticky !important;">
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">AGROHARBI</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">FARMACIJA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">GRAĐEVINA</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">HARBILAB</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black harbi-active" href="#">PROIZVODNJA</a>
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
                    <p style="color:black; font-size:16px;" class="elix-justify">Sektor proizvodnje zadužen je za realizaciju zadanih proizvodnih ciljeva gdje su osnovne sirovine iz vlastitih izvora. Proizvodnja obuhvata realizaciju kako serijskih proizvoda, tako i izradu uzoraka. </p>
            </div>
            </div>
            <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100"><a href="{{asset('img/sektoripage/karta.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:auto;" src="{{asset('img/sektoripage/proizvodnja/proizvodnja.png')}}"></img></a>
            </div>
        </div>
        <!--masine-->
        <div class="row mt-4">
            <div class="section-title" data-aos="fade-up">
                <h4>Mašine za preradu mikroniziranog pirofilitnog škriljca</h4>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <p style="color:black; font-size:16px;" class="elix-justify">Sektor Građevina u saradnji sa INRC-om na lokaciji podružnice Buturović Polje trenutno (septembar 2022. godina) vrši montažu kupljenih mašina i opreme za proizvodnju svih vrsta praškastih proizvoda namjenjenih za građevinsku industriju (ljepila, maletri, toplotne fasade, specijalni premazi itd). Osim proizvoda namjenjenih za građevinsku industriju, na lokaciji podružnice proizvodit će se i praškasti gnojidbeni proizvodi na bazi pirofilitnih kompozita (đubriva, kondicioneri, poboljšivači, itd.).</p>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                <div id="carouselExample1Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="50000">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1A/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1A/2.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!--masine-->
        <div class="row mt-4">
            <div class="section-title" data-aos="fade-up">
                <h4>Proizvodne linije za različite proizvode</h4>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <p style="color:black; font-size:16px;" class="elix-justify">PD AD Harbi d.o.o. Sarajevo u sklopu svojih proizvodnih aktivnosti vrši izradu PVC/ALU stolarije, kako za vlastite tako i za potrebe tržište.</p>
            </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                <div id="carouselExample2Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="50000">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1B/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1B/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1B/3.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!--DRUGI DIO-->
        <div class="row mt-5">
            <div class="section-title" data-aos="fade-up">
                <h4>Proizvodna linija za izradu PVC/ALU programa</h4>
            </div>
            <div class="col-lg-12">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="50000">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1C/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/proizvodnja/1C/2.jpg')}}" class="d-block w-100">
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