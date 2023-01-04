@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>AGROHARBI</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-12 col-lg-2">
            <nav class="nav nav-pills flex-column flex-sm-row justify-content-start" style="position: sticky !important;">
                <a class="flex-sm-fill text-sm-left nav-link text-black harbi-active" href="#">AGROHARBI</a>
                <a class="flex-sm-fill text-sm-left nav-link text-black" href="#">FARMACIJA</a>
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
                      <p style="color:black; font-size:16px;" class="elix-justify">Djelatnost sektora se odvija kroz istraživanja i proizvodnju potpuno prirodnih mineroloških organskih đubriva, suplemenata, pobojšivača tla, sredstava za zaštitu bilja, u različitoj formi i pakovanju, a čija je osnovna sirovina pirofilitni škriljac. U proizvodnom procesu se koriste vlastiti proizvodi na bazi pirofilitnih kompozita za gnojidbu, prihranu, poboljšanje kvaliteta zemljišta, zaštitu bilja, ali i kao konzervans u gotovim proizvodima. Pokretanje pogona za proizvodnju gnojidbenih proizvoda na bazi pirofilitnog škriljca je realno i opravdano. Podloga za takvo opredjeljenje je globalni trend poskupljenja energenata i troškova transporta, nestašice sirovina za proizvodnju sintetskih đubriva, smanjena proizvodnja istih kao i opredjeljenja EU da se u gnojidbene svrhe što više koriste postojeći prirodni materijali. Pokretanje proizvodnje gnojidbenih proizvoda smanjiti će uvoz i povećati izvoz gotovih proizvoda iste namjene i zaštititi će domaću poljoprivrednu proizvodnju kao važnu industrijsku granu u BiH.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="1Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/1 A/Različite primjene pirofilita u poljoprivredi/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/1 A/Različite primjene pirofilita u poljoprivredi/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/1 A/Različite primjene pirofilita u poljoprivredi/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/1 A/Različite primjene pirofilita u poljoprivredi/4.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/1 A/Različite primjene pirofilita u poljoprivredi/5.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/1 A/Različite primjene pirofilita u poljoprivredi/6.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#1Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#1Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div>
        <!--DRUGI DIO-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon Buturović Polje, Konjic</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">Eksperimentalni poligon u Buturović Polju se prostire na površini od 4.000 m2 koji se kontinuirano koristi za eksperimenatlni uzgoj svih vrsta poljoprivrednih kultura uz primjenu pirofilita u različite svrhe (priprema zemljišta, gnojidba, zaštita bilja).</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="2Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/2  Eksperimentalni poligon u Buturović Polju/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/2  Eksperimentalni poligon u Buturović Polju/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/2  Eksperimentalni poligon u Buturović Polju/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/2  Eksperimentalni poligon u Buturović Polju/4.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/2  Eksperimentalni poligon u Buturović Polju/5.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/2  Eksperimentalni poligon u Buturović Polju/6.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#2Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#2Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <!--DRUGI DIO-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon Goransko Polje, Konjic</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">Eksperimentalni poligon u Goranskom Polju, zauzima ukupnu površinu 3.500 m2. Na ovom eksperimentalnom poligonu se svake godine uzgajaju različite poljoprivredne kulture i vrše istraživanja i potvrđivanja učinkovitosti djelovanja pirofilita na poboljšanje kvaliteta i prinosa poljoprivrednh proizvoda.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="3Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/3  Eksperimentalni poligon u Goranskom Polju/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/3  Eksperimentalni poligon u Goranskom Polju/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/3  Eksperimentalni poligon u Goranskom Polju/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/3  Eksperimentalni poligon u Goranskom Polju/4.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#3Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#3Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon - Agromediteranski fakultet Mostar</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">PD AD Harbi d.o.o. Sarajevo je u sklopu naučno-poslove saradnje sa Agromediteranskim fakultetom, u proteklom periodu vršilo istraživanje pirofilita u poljoprivredne svrhe na dvije lokacije Mostar (staklenik) i Blagaj (na površini 5.000 m2). Eksperimentalni poligoni su obuhvatali istraživanja primjene pirofilita na otvorenom i zatvorenom prostoru (staklenička proizvodnja), te na različitim voćarskim i povrltlarskim kulturama, uključujući i ljekobilje.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="4Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/4 Eksperimentalni poligon - Agromediteranski fakultet Mostar/Lokacija eksperimentalnog poligona Mostar/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/4 Eksperimentalni poligon - Agromediteranski fakultet Mostar/Lokacija eksperimentalnog poligona Mostar/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/4 Eksperimentalni poligon - Agromediteranski fakultet Mostar/Lokacija eksperimentalnog poligona Mostar/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/4 Eksperimentalni poligon - Agromediteranski fakultet Mostar/Lokacija eksperimentalnog poligona Mostar/4.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#4Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#4Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon - Federalni zavod za poljoprivredu Sarajevo</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">PD AD Harbi d.o.o. Sarajevo je u sklopu naučno-poslove saradnje sa Federalnim zavodom za poljoprivredu u proteklom periodu vršili smo istraživanje pirofilita pri uzgoju različitih  poljoprivrednih kultura na otvorenom prostoru eksperimentalnog poligona na Butmiru.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="5Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/5  Eksperimentalni poligon - Federalni zavod za poljoprivredu Sarajevo/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/5  Eksperimentalni poligon - Federalni zavod za poljoprivredu Sarajevo/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/5  Eksperimentalni poligon - Federalni zavod za poljoprivredu Sarajevo/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/5  Eksperimentalni poligon - Federalni zavod za poljoprivredu Sarajevo/4.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/5  Eksperimentalni poligon - Federalni zavod za poljoprivredu Sarajevo/5.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#5Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#5Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon Hercegovinalijek Mostar</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">Poslovna saradnja sa firmom Hercegovinalijek iz Mostara je ostvarena kroz primjenu pirofilitnih proizvoda na platažama za uzgoj trešnje, jabuke i vinove loze, na dva lokaliteta Dubrave i Vrapčići.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="6Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/6   Eksperimentalni poligon Hercegovinalijek Mostar - lokacije DUBRAVE I VRAPČIĆI/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/6   Eksperimentalni poligon Hercegovinalijek Mostar - lokacije DUBRAVE I VRAPČIĆI/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/6   Eksperimentalni poligon Hercegovinalijek Mostar - lokacije DUBRAVE I VRAPČIĆI/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/6   Eksperimentalni poligon Hercegovinalijek Mostar - lokacije DUBRAVE I VRAPČIĆI/4.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#6Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#6Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon Poljoprivredno – prehrambeni fakultet Sarajevo</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">PD AD Harbi d.o.o. je poslovno-naučnu saradnju ostvarilo sa Poljoprivredno-prehrambenim fakultetom iz Sarajeva, a eksperimentalno istraživanje pirofilita se vršilo na više lokaliteta. Eksperimentalni poligoni su prilagođeni istraživanju pirofilita kao sredstva za remedijaciju zemljišta onečišćenog sa teškim metalima.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="7Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/7  Eksperimentalni poligon Poljoprivredno – prehrambeni fakultet Sarajevo/1  Eksperimentalni poligon Zenica.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/7  Eksperimentalni poligon Poljoprivredno – prehrambeni fakultet Sarajevo/2  Eksperimentalni poligon Kakanj.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/7  Eksperimentalni poligon Poljoprivredno – prehrambeni fakultet Sarajevo/3  Eksperimentalni poligon Gornji Pasci.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/7  Eksperimentalni poligon Poljoprivredno – prehrambeni fakultet Sarajevo/4  Eksperimentalni poligon Maglaj.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/7  Eksperimentalni poligon Poljoprivredno – prehrambeni fakultet Sarajevo/5  Eksperimentalni poligon Lukavac.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#7Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#7Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon - Poljoprivredni fakultet Banja Luka</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">Naučno-poslovna saradnja sa Poljoprivrednim fakultetom u Banja Luci odvija se kroz eksperimentalne oglede na otvorenom i zatvorenom prostoru uz primjenu pirofilita kao sredstva za povećanje prinosa/kvaliteta i zaštitu poljoprivrednih proizvoda.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="8Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/8/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/8/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/8/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/8/4.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#8Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#8Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>

        </div><!--end-->
        <hr>
        <div class="row mt-2">
            <div class="section-title" data-aos="fade-up">
                <h1>Eksperimentalni poligon, selo Banja, Aranđelovac, Srbija</h1>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
              <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                      <p style="color:black; font-size:16px;" class="elix-justify">Eksperimentalni poligon na navedenoj lokaciji je privatni posjed našeg naučnog savjetnika i stručnog saradnika dr. Milana Adamovića. Eksperimentalni poligon se koristi za uzgoj različitih poljoprivrednih kultura uz primjenu pirofilita (gnojidba, siliranje, zaštita bilja).</p>
              </div>
            </div>
            <div class="col-lg-6">
                <div id="9Autoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/9/1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/9/2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/9/3.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/sektoripage/agroharbi/9/4.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#9Autoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#9Autoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> 
            </div>
        </div><!--end-->
        </div>
    </div>
  </div>
</section>

@endsection