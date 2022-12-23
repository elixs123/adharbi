@extends('default')

@section('content')
<main id="main">

<section id="about" class="about">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>{{ __('home.nekoliko') }}</h2>
    </div>
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="image">
          <img src="assets/img/Direktor.jpg" style="width:100%; height:50%;"  alt="">
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 elix-justify">
          <p>{{ __('home.text_pocetna_1') }}</p>
          <p>{{ __('home.text_pocetna_2') }}</p>
          <p>{{ __('home.text_pocetna_3') }}</p>
          <p>{{ __('home.text_pocetna_4') }}<br>{{ __('home.text_pocetna_5') }}</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->

<section id="services" class="services">

  <div class="container">
    <div class="section-title" data-aos="fade-up">

      <h2>Rudarstvo</h2>

      <p></p>

    </div>



    <div class="row">

      <div class="col-lg-6 order-2 order-lg-1">

        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">

          <i class="bx bx-receipt"></i>

          <h4>SEKTOR
RUDARSTVO I GEOLOGIJA
</h4>

          <p style="color:black; font-size:16px;">Sektor Rudarstvo i geologija vrši istraživanja, eksploataciju, transport i preradu mineralnih sirovina na području srednjobosanskih škriljavih planina, ukupne površine 2.700 km2, na kojem je dosadašnjim istraživanjima dokazano postojanje više vrsta nemetaličnih i metaličnih sirovina.
Veći dio ovog područja je istraživan za vrijeme Osmanske, Austrougarske i Jugoslavenske vladavine, na lokalitetima Općina Konjic, Jablanica, Bugojno, Prozor, Gornji Vakuf, Fojnica i Kreševo.  
</p>

        </div>

        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">



          <p style="color:black; font-size:16px;">Minerali koji su tada posmatrani kao sporedni minerali danas su jako zanimljivi za istraživanje i buduću eksploataciju. 
Rudarsko-geološki sektor trenutno radi na definisanju ležišta nemetaličnih i metaličnih mineralnih sirovina, prvenstveno pirofilitnog škriljca, gipsa i željeznih ruda na lokacijama Parsovići, Lukšije, Požetva, Repovci, Višnjice, Oteležani, Sovići, Tovarnica, Šuplji Kuk, Kiser-Rižine, Brložine, Bijela, Mrake, Kršćan Do, Lovno i Ljubina.</p>

        </div>

    

      </div>

      <div class="image col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100"><a href="assets/img/karta.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><img style="width: 100%; height:auto;" src="assets/img/karta.png"></img></a></div>

    </div>



  </div>

</section><!-- End Services Section -->



<!-- ======= Featured Section ======= -->

<section id="featured" class="featured">

  <div class="container">



    <div class="row">

      <div class="col-lg-6" data-aos="fade-right">

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">

            <figure>

              <img src="assets/img/rudarstvo.png" alt="" class="img-fluid">

            </figure>

          </div>

          <div class="tab-pane" id="tab-2">

            <figure>

              <img src="assets/img/rudarstvo.png" alt="" class="img-fluid">

            </figure>

          </div>

          <div class="tab-pane" id="tab-3">

            <figure>

              <img src="assets/img/rudarstvo.png" alt="" class="img-fluid">

            </figure>

          </div>

          <div class="tab-pane" id="tab-4">

            <figure>

              <img src="assets/img/rudarstvo.png" alt="" class="img-fluid">

            </figure>

          </div>

        </div>

      </div>

      <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">

        <ul class="nav nav-tabs flex-column">

          <li class="nav-item">

            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">

              <h4></h4>

              <p style="font-size:16px;">Ležište pirofilita „Parsovići” smješteno je oko 25 km asfaltnog puta od Konjica, neposredno iznad ušća potoka Šćukovac u Neretvicu. Ležište se nalazi u brdsko-planinskom području koje predstavlja ogranak srednjobosanskih škriljavih planina. U periodu od 1956. godine do danas na lokalitetu Parsovići vršena su istraživanja i eksploatacija rude pirofilit od strane firme „Rudar“ Konjic. </p>

            </a>

          </li>

          <li class="nav-item mt-2">

            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">

              <h4></h4>

              <p style=" font-size:16px;">Na ovom istražnom podučju površine 44,9 ha izbušeno je 40 bušotina ukupne dužine 3.498 metara. Maksimalna dubina postignuta je na bušotini br. 31 i ona iznosi 171,5 m (ostala u pirofilitom škriljcu). Ono što je potrebno naglasiti da je samo kod 11 bušotina nabušena podina pirofilitnog škriljca, tako da se u narednom periodu planiraju vršiti dodatna istraživanja. 
Izvršenim proračunom u ležištu pirofilita „Parsovići” dokazane su bilansne rezerve 38.398.220 tona. Istražnim bušenjem konstantovana je određena količina gipsa u podini ležišta. 
Pored nalazišta Parsovići dosadašnjim istraživanjima dokazano je postojanje pirofilitnog škriljca na sljedećim lokalitetima u okviru istražnog područja: Lukšije, Požetva, Repovci, Višnjice i Oteležani.  
</p>

            </a>

          </li>

          <li class="nav-item mt-2">

            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">

              <h4></h4></h4>

              <p style="font-size:16px;">Površina do sada istraženih radova na svim nalazištima pirofilitnog škriljca je 58,2 km2. PD AD Harbi d.o.o. Sarajevo posjeduje svu neophodnu dokumentaciju za nastavak eksploatacije (Rješenje o rezervama sa upisanim koordinatama istražnog prostora, Okolišne dozvole za podzemnu i površinsku eksploataciju, Predhodnu vodnu saglasnost, Ugovor o kupoprodaji rude, vasnici smo ¼ zemljišta u okviru eksploatacijskog polja, Odluku općinskog vijeća za nastavak eksploatacije i upisani smo u katastar istražnih prostora kod HNK-Mostar).</p>

            </a>

          </li>



        </ul>

      </div>

    </div>



  </div>

</section><!-- End Featured Section -->



<!-- ======= Why Us Section ======= -->

<section id="why-us" class="why-us">

  <div class="container-fluid">



    <div class="row">



      <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">



        <div class="content" data-aos="fade-up">

          <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>

          <p>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit

          </p>

        </div>



        <div class="accordion-list">

          <ul>

            <li data-aos="fade-up" data-aos-delay="100">

              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">

                <p>

                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.

                </p>

              </div>

            </li>



            <li data-aos="fade-up" data-aos-delay="200">

              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">

                <p>

                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.

                </p>

              </div>

            </li>



            <li data-aos="fade-up" data-aos-delay="300">

              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">

                <p>

                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis

                </p>

              </div>

            </li>



          </ul>

        </div>



      </div>



      <div class="col-lg-5 order-1 order-lg-2 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in">

        <a href="https://www.youtube.com/watch?v=LIqQNG_q2us" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>

      </div>



    </div>



  </div>

</section><!-- End Why Us Section -->



<!-- ======= Portfolio Section ======= -->

<section id="portfolio" class="portfolio">

  <div class="container">



    <div class="section-title" data-aos="fade-up">

      <h2>Novosti</h2>

      <p></p>

    </div>



    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-12 d-flex justify-content-center">

        

      </div>

    </div>



    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">



      <div class="col-lg-4 col-md-6 portfolio-item filter-app">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>App 1</h4>

            <p>App</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-web">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>Web 3</h4>

            <p>Web</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-app">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>App 2</h4>

            <p>App</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-card">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>Card 2</h4>

            <p>Card</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-web">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>Web 2</h4>

            <p>Web</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-app">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>App 3</h4>

            <p>App</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-card">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>Card 1</h4>

            <p>Card</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-card">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>Card 3</h4>

            <p>Card</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 portfolio-item filter-web">

        <div class="portfolio-wrap">

          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h4>Web 3</h4>

            <p>Web</p>

            <div class="portfolio-links">

              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>

              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

            </div>

          </div>

        </div>

      </div>



    </div>



  </div>

</section><!-- End Portfolio Section -->



<!-- ======= Testimonials Section ======= -->

<section id="testimonials" class="testimonials">

  <div class="container" data-aos="zoom-in">

    <div class="quote-icon">

      <i class="bx bxs-quote-right"></i>

    </div>



    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper-wrapper">



        <div class="swiper-slide">

          <div class="testimonial-item">

            <p>

              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.

            </p>

            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">

            <h3>Saul Goodman</h3>

            <h4>Ceo &amp; Founder</h4>

          </div>

        </div><!-- End testimonial item -->



        <div class="swiper-slide">

          <div class="testimonial-item">

            <p>

              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.

            </p>

            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">

            <h3>Sara Wilsson</h3>

            <h4>Designer</h4>

          </div>

        </div><!-- End testimonial item -->



        <div class="swiper-slide">

          <div class="testimonial-item">

            <p>

              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.

            </p>

            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">

            <h3>Jena Karlis</h3>

            <h4>Store Owner</h4>

          </div>

        </div><!-- End testimonial item -->



        <div class="swiper-slide">

          <div class="testimonial-item">

            <p>

              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.

            </p>

            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">

            <h3>Matt Brandon</h3>

            <h4>Freelancer</h4>

          </div>

        </div><!-- End testimonial item -->



        <div class="swiper-slide">

          <div class="testimonial-item">

            <p>

              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.

            </p>

            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">

            <h3>John Larson</h3>

            <h4>Entrepreneur</h4>

          </div>

        </div><!-- End testimonial item -->



      </div>

      <div class="swiper-pagination"></div>

    </div>



  </div>

</section><!-- End Testimonials Section -->



<!-- ======= Clients Section ======= -->

<section id="clients" class="clients">

  <div class="container">



    <div class="row">



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">

        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">

        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">

        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">

        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">

        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">

        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">

      </div>

<div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">

        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">

        <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">

        <img src="assets/img/clients/client-9.png" class="img-fluid" alt="">

      </div>
      
       <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">

        <img src="assets/img/clients/client-11.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">

        <img src="assets/img/clients/client-12.png" class="img-fluid" alt="">

      </div>



      <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">

        <img src="assets/img/clients/client-13.png" class="img-fluid" alt="">

      </div>


    </div>



  </div>

</section><!-- End Clients Section -->



<!-- ======= Team Section ======= -->

<section id="team" class="team">

  <div class="container">



    <div class="section-title" data-aos="fade-up">

      <h2>Team</h2>

      <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>

    </div>



    <div class="row">



      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

        <div class="member" data-aos="zoom-in">

          <div class="member-img">

            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">

            <div class="social">

              <a href=""><i class="bi bi-twitter"></i></a>

              <a href=""><i class="bi bi-facebook"></i></a>

              <a href=""><i class="bi bi-instagram"></i></a>

              <a href=""><i class="bi bi-linkedin"></i></a>

            </div>

          </div>

          <div class="member-info">

            <h4>Walter White</h4>

            <span>Chief Executive Officer</span>

            <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

        <div class="member" data-aos="zoom-in" data-aos-delay="100">

          <div class="member-img">

            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">

            <div class="social">

              <a href=""><i class="bi bi-twitter"></i></a>

              <a href=""><i class="bi bi-facebook"></i></a>

              <a href=""><i class="bi bi-instagram"></i></a>

              <a href=""><i class="bi bi-linkedin"></i></a>

            </div>

          </div>

          <div class="member-info">

            <h4>Sarah Jhonson</h4>

            <span>Product Manager</span>

            <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque</p>

          </div>

        </div>

      </div>



      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

        <div class="member" data-aos="zoom-in" data-aos-delay="200">

          <div class="member-img">

            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">

            <div class="social">

              <a href=""><i class="bi bi-twitter"></i></a>

              <a href=""><i class="bi bi-facebook"></i></a>

              <a href=""><i class="bi bi-instagram"></i></a>

              <a href=""><i class="bi bi-linkedin"></i></a>

            </div>

          </div>

          <div class="member-info">

            <h4>William Anderson</h4>

            <span>CTO</span>

            <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p>

          </div>

        </div>

      </div>



    </div>



  </div>

</section><!-- End Team Section -->





<!-- ======= Frequently Asked Questions Section ======= -->

<section id="faq" class="faq">

  <div class="container">



    <div class="section-title" data-aos="fade-up">

      <h2>Frequently Asked Questions</h2>

    </div>



    <ul class="faq-list">



      <li data-aos="fade-up">

        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>

        <div id="faq1" class="collapse" data-bs-parent=".faq-list">

          <p>

            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.

          </p>

        </div>

      </li>



      <li data-aos="fade-up" data-aos-delay="100">

        <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>

        <div id="faq2" class="collapse" data-bs-parent=".faq-list">

          <p>

            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.

          </p>

        </div>

      </li>



      <li data-aos="fade-up" data-aos-delay="200">

        <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>

        <div id="faq3" class="collapse" data-bs-parent=".faq-list">

          <p>

            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis

          </p>

        </div>

      </li>



      <li data-aos="fade-up" data-aos-delay="300">

        <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>

        <div id="faq4" class="collapse" data-bs-parent=".faq-list">

          <p>

            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.

          </p>

        </div>

      </li>



      <li data-aos="fade-up" data-aos-delay="400">

        <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>

        <div id="faq5" class="collapse" data-bs-parent=".faq-list">

          <p>

            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in

          </p>

        </div>

      </li>



      <li data-aos="fade-up" data-aos-delay="500">

        <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>

        <div id="faq6" class="collapse" data-bs-parent=".faq-list">

          <p>

            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.

          </p>

        </div>

      </li>



    </ul>



  </div>

</section><!-- End Frequently Asked Questions Section -->



<!-- ======= Contact Section ======= -->

<section id="contact" class="contact section-bg">

  <div class="container">



    <div class="section-title">

      <h2>Kontakt</h2>

      <p></p>

    </div>



    <div class="row">



      <div class="col-lg-4">

        <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">

          <div class="address">

            <i class="bi bi-geo-alt"></i>

            <h4>Location:</h4>

            <p>Tvornička 3 71210
Ilidža / Sarajevo</p>

          </div>



          <div class="email">

            <i class="bi bi-envelope"></i>

            <h4>Email:</h4>

            <p>info@adharbi.ba</p>

          </div>



          <div class="phone">

            <i class="bi bi-phone"></i>

            <h4>Call:</h4>

            <p>+387 33 629 883<br>
+387 61 153 421
<br>
+387 36 740 288</p>

          </div>



        </div>



      </div>



      <div class="col-lg-8 mt-5 mt-lg-0">



        <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">

          <div class="row">

            <div class="col-md-6 form-group">

              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>

            </div>

            <div class="col-md-6 form-group mt-3 mt-md-0">

              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>

            </div>

          </div>

          <div class="form-group mt-3">

            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>

          </div>

          <div class="form-group mt-3">

            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>

          </div>

          <div class="my-3">

            <div class="loading">Loading</div>

            <div class="error-message"></div>

            <div class="sent-message">Your message has been sent. Thank you!</div>

          </div>

          <div class="text-center"><button type="submit">Send Message</button></div>

        </form>



      </div>



    </div>



  </div>

</section><!-- End Contact Section -->
@endsection