@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>Rudarstvo</h1>
        <img src="{{asset('img/sektoripage/rudarstvo.png')}}" class="rounded mx-auto d-block" style="width:auto;height:400px;" alt="{{asset('img/sektoripage/rudarstvo.png')}}">
    </div>
    <div class="row" data-aos="fade-bottom">
        @include('includes.sektori')
        <div class="col-12 col-lg-10">
            <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                    <h4>SEKTOR RUDARSTVO I GEOLOGIJA</h4>
                    <p style="color:black; font-size:16px;" class="elix-justify">Sektor Rudarstvo i geologija vrši istraživanja, eksploataciju, transport i preradu mineralnih sirovina na području srednjobosanskih škriljavih planina, ukupne površine 2.700 km2, na kojem je dosadašnjim istraživanjima dokazano postojanje više vrsta nemetaličnih i metaličnih sirovina. Veći dio ovog područja je istraživan za vrijeme Osmanske, Austrougarske i Jugoslavenske vladavine, na lokalitetima Općina Konjic, Jablanica, Bugojno, Prozor, Gornji Vakuf, Fojnica i Kreševo. <br>Minerali koji su tada posmatrani kao sporedni minerali danas su jako zanimljivi za istraživanje i buduću eksploataciju. 
                    Rudarsko-geološki sektor trenutno radi na definisanju ležišta nemetaličnih i metaličnih mineralnih sirovina, prvenstveno pirofilitnog škriljca, gipsa i željeznih ruda na lokacijama Parsovići, Lukšije, Požetva, Repovci, Višnjice, Oteležani, Sovići, Tovarnica, Šuplji Kuk, Kiser-Rižine, Brložine, Bijela, Mrake, Kršćan Do, Lovno i Ljubina.</p>
                    <p style="font-size:16px;" class="elix-justify">Ležište pirofilita „Parsovići” smješteno je oko 25 km asfaltnog puta od Konjica, neposredno iznad ušća potoka Šćukovac u Neretvicu. Ležište se nalazi u brdsko-planinskom području koje predstavlja ogranak srednjobosanskih škriljavih planina. U periodu od 1956. godine do danas na lokalitetu Parsovići vršena su istraživanja i eksploatacija rude pirofilit od strane firme „Rudar“ Konjic. </p><p style=" font-size:16px;" class="elix-justify">Na ovom istražnom podučju površine 44,9 ha izbušeno je 40 bušotina ukupne dužine 3.498 metara. Maksimalna dubina postignuta je na bušotini br. 31 i ona iznosi 171,5 m (ostala u pirofilitom škriljcu). Ono što je potrebno naglasiti da je samo kod 11 bušotina nabušena podina pirofilitnog škriljca, tako da se u narednom periodu planiraju vršiti dodatna istraživanja. 
                Izvršenim proračunom u ležištu pirofilita „Parsovići” dokazane su bilansne rezerve 38.398.220 tona. Istražnim bušenjem konstantovana je određena količina gipsa u podini ležišta. 
                Pored nalazišta Parsovići dosadašnjim istraživanjima dokazano je postojanje pirofilitnog škriljca na sljedećim lokalitetima u okviru istražnog područja: Lukšije, Požetva, Repovci, Višnjice i Oteležani.</p><p style="font-size:16px;" class="elix-justify">Površina do sada istraženih radova na svim nalazištima pirofilitnog škriljca je 58,2 km2. PD AD Harbi d.o.o. Sarajevo posjeduje svu neophodnu dokumentaciju za nastavak eksploatacije (Rješenje o rezervama sa upisanim koordinatama istražnog prostora, Okolišne dozvole za podzemnu i površinsku eksploataciju, Predhodnu vodnu saglasnost, Ugovor o kupoprodaji rude, vasnici smo ¼ zemljišta u okviru eksploatacijskog polja, Odluku općinskog vijeća za nastavak eksploatacije i upisani smo u katastar istražnih prostora kod HNK-Mostar).</p> 
                </div>
            </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/karta.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/karta.png')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/rud1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/rud1.jpg')}}"></img></a>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100">
                    <a href="{{asset('img/sektoripage/rud2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:400px;" src="{{asset('img/sektoripage/rud2.jpg')}}"></img></a>
                </div>
        </div>

        </div>
    </div>
  </div>
</section>
@endsection