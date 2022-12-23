@extends('default')

@section('content')
<main id="main">
<section id="services" class="services">

    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h1>Rudarstvo</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                <i class="bx bx-receipt"></i>
                <h4>SEKTORRUDARSTVO I GEOLOGIJA</h4>
                    <p style="color:black; font-size:16px;">Sektor Rudarstvo i geologija vrši istraživanja, eksploataciju, transport i preradu mineralnih sirovina na području srednjobosanskih škriljavih planina, ukupne površine 2.700 km2, na kojem je dosadašnjim istraživanjima dokazano postojanje više vrsta nemetaličnih i metaličnih sirovina. Veći dio ovog područja je istraživan za vrijeme Osmanske, Austrougarske i Jugoslavenske vladavine, na lokalitetima Općina Konjic, Jablanica, Bugojno, Prozor, Gornji Vakuf, Fojnica i Kreševo.</p>
            </div>

            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                <p style="color:black; font-size:16px;">Minerali koji su tada posmatrani kao sporedni minerali danas su jako zanimljivi za istraživanje i buduću eksploataciju. 
        Rudarsko-geološki sektor trenutno radi na definisanju ležišta nemetaličnih i metaličnih mineralnih sirovina, prvenstveno pirofilitnog škriljca, gipsa i željeznih ruda na lokacijama Parsovići, Lukšije, Požetva, Repovci, Višnjice, Oteležani, Sovići, Tovarnica, Šuplji Kuk, Kiser-Rižine, Brložine, Bijela, Mrake, Kršćan Do, Lovno i Ljubina.</p>
            </div>
            </div>
            <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100"><a href="{{asset('img/sektoripage/karta.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:auto;" src="{{asset('img/sektoripage/karta.png')}}"></img></a></div>
        </div>
    </div>
</section><!-- End Services Section -->

<section id="featured" class="featured">

<div class="container">
  <div class="row">
    <div class="col-lg-6" data-aos="fade-right">
      <div class="tab-content">
        <div class="tab-pane active show" id="tab-1">
          <figure>
            <img src="{{asset('img/sektoripage/rudarstvo.png')}}" alt="{{asset('img/sektoripage/rudarstvo.png')}}" class="img-fluid">
          </figure>
        </div>
        <div class="tab-pane" id="tab-2">
          <figure>
            <img src="{{asset('img/sektoripage/rud1.jpg')}}" alt="{{asset('img/sektoripage/rud1.jpg')}}" class="img-fluid">
          </figure>
        </div>
        <div class="tab-pane" id="tab-3">
          <figure>
            <img src="{{asset('img/sektoripage/rud2.jpg')}}" alt="{{asset('img/sektoripage/rud1.jpg')}}" class="img-fluid">
          </figure>
        </div>
        <div class="tab-pane" id="tab-4">
          <figure>
            <img src="{{asset('img/sektoripage/rud3.jpg')}}" alt="{{asset('img/sektoripage/rud3.jpg')}}" class="img-fluid">
          </figure>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
      <ul class="nav nav-tabs flex-column" style="height: 100%;box-shadow: none;">
        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
            <p style="font-size:16px;">Ležište pirofilita „Parsovići” smješteno je oko 25 km asfaltnog puta od Konjica, neposredno iznad ušća potoka Šćukovac u Neretvicu. Ležište se nalazi u brdsko-planinskom području koje predstavlja ogranak srednjobosanskih škriljavih planina. U periodu od 1956. godine do danas na lokalitetu Parsovići vršena su istraživanja i eksploatacija rude pirofilit od strane firme „Rudar“ Konjic. </p>
          </a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <p style=" font-size:16px;">Na ovom istražnom podučju površine 44,9 ha izbušeno je 40 bušotina ukupne dužine 3.498 metara. Maksimalna dubina postignuta je na bušotini br. 31 i ona iznosi 171,5 m (ostala u pirofilitom škriljcu). Ono što je potrebno naglasiti da je samo kod 11 bušotina nabušena podina pirofilitnog škriljca, tako da se u narednom periodu planiraju vršiti dodatna istraživanja. 
Izvršenim proračunom u ležištu pirofilita „Parsovići” dokazane su bilansne rezerve 38.398.220 tona. Istražnim bušenjem konstantovana je određena količina gipsa u podini ležišta. 
Pored nalazišta Parsovići dosadašnjim istraživanjima dokazano je postojanje pirofilitnog škriljca na sljedećim lokalitetima u okviru istražnog područja: Lukšije, Požetva, Repovci, Višnjice i Oteležani.</p>
          </a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <p style="font-size:16px;">Površina do sada istraženih radova na svim nalazištima pirofilitnog škriljca je 58,2 km2. PD AD Harbi d.o.o. Sarajevo posjeduje svu neophodnu dokumentaciju za nastavak eksploatacije (Rješenje o rezervama sa upisanim koordinatama istražnog prostora, Okolišne dozvole za podzemnu i površinsku eksploataciju, Predhodnu vodnu saglasnost, Ugovor o kupoprodaji rude, vasnici smo ¼ zemljišta u okviru eksploatacijskog polja, Odluku općinskog vijeća za nastavak eksploatacije i upisani smo u katastar istražnih prostora kod HNK-Mostar).</p></a>
        </li>
      </ul>
    </div>
  </div>
</div>
</section><!-- End Featured Section -->
@endsection