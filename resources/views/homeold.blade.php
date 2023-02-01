<!doctype html>
<html lang="en">
<head><meta charset="utf-8">
	<title>AD HARBI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
	<link href="{{ asset('kenan/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('kenan/css/owl.theme.default.min.css') }}" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" rel="stylesheet" />
	<link href="{{ asset('kenan/css/style.css') }}" rel="stylesheet" />
<style type="text/css">

:root {
  --main-white-color: white;
  --main-black-color: black;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.static {
  position: static;
}

.cover {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.owl-carousel .owl-slide {
  position: relative;
  height: 100vh;
  background-color: lightgray;
}

.owl-carousel .owl-slide-animated {
  transform: translateX(20px);
  opacity: 0;
  visibility: hidden;
  transition: all 0.05s;
}

.owl-carousel .owl-slide-animated.is-transitioned {
  transform: none;
  opacity: 1;
  visibility: visible;
  transition: all 0.5s;
}

.owl-carousel .owl-slide-title.is-transitioned {
  transition-delay: 0.2s;
}

.owl-carousel .owl-slide-subtitle.is-transitioned {
  transition-delay: 0.35s;
}

.owl-carousel .owl-slide-cta.is-transitioned {
  transition-delay: 0.5s;
}

.owl-carousel .owl-dots,
.owl-carousel .owl-nav {
  position: absolute;
}

.owl-carousel .owl-dots .owl-dot,
.owl-carousel .owl-nav [class*="owl-"]:focus {
  outline: none;
}

.owl-carousel .owl-dots .owl-dot span {
  background: transparent;
  border: 1px solid var(--main-black-color);
  transition: all 0.2s ease;
}

.owl-carousel .owl-dots .owl-dot:hover span,
.owl-carousel .owl-dots .owl-dot.active span {
  background: var(--main-black-color);
}

.owl-carousel .owl-nav {
  left: 50%;
  top: 10%;
  transform: translateX(-50%);
  margin: 0;
}

.owl-carousel .owl-nav svg {
  opacity: 0.3;
  transition: opacity 0.3s;
}

.owl-carousel .owl-nav button:hover svg {
  opacity: 1;
}

.owl-carousel .owl-nav [class*="owl-"]:hover {
  background: transparent;
}

section {
  display: none;
}

@media screen and (max-width: 575px) {
  .owl-carousel .owl-nav {
    top: 5%;
  }
  
  .owl-carousel .owl-nav svg {
    width: 24px;
    height: 24px;
  }
}

.loader{
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 
              50% 50% no-repeat rgb(249,249,249);
}

</style>
</head>
<body>
<div class="loader"></div>

<div class="home-slider owl-carousel js-fullheight">
<div class="slider-item js-fullheight" style="background-image:url(assets/img/slider.jpg);">
<div class="overlay"></div>

<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
<div class="col-md-12 ftco-animate">
<div class="text w-100 text-center" style="justify-content: center;display: flex;"><img class="center" src="{{asset('img/logo.png')}}" style="margin-top:-20px; width:300px; height:auto;" /></div>
</div>
&nbsp;
<div style="display: flex;
    text-align: center;
    align-content: flex-start;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
    justify-content: center;">
    
<a href="{{route('rudarstvo')}}"><img  src="assets/img/rudarstvo.png" alt="Istraživanje" style=""></a>
<a href="{{route('tehnicko-tehnoloski')}}"><img  src="assets/img/tehnoloski.png" alt="Istraživanje" style=""></a>
<a href="{{route('proizvodnja')}}"><img  src="assets/img/proizvodnja.png" alt="Istraživanje" style=""></a>
<a href="{{route('agroharbi')}}"><img  src="assets/img/agroharbi.png" alt="Istraživanje" style=""></a>
<a href="{{route('farmacija')}}"><img  src="assets/img/farmacija.png" alt="Istraživanje" style=""></a>
<a href="{{route('proizvodnja')}}"><img  src="assets/img/harbilab.png" alt="Istraživanje" style=""></a>
<a href="{{route('gradjevina')}}"><img  src="assets/img/građevinarstvo.png" alt="Istraživanje" style=""></a>
</div>
<br>
<a aria-pressed="true" class="btn btn-success btn-sm active" href="{{route('pocetna')}}" role="button" style="width: 200px;">{{ __('onama.saznajvise') }}</a></p>
</div>
</div>
</div>

<div class="slider-item js-fullheight" style="background-image:url(assets/img/slider1.jpg);">
<div class="overlay"></div>

<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
<div class="col-md-12 ftco-animate">
<div class="text w-100 text-center" style="justify-content: center;display: flex;"><img class="center" src="{{asset('img/logo.png')}}" style="margin-top:-20px; width:300px; height:auto;" /></div>
</div>
&nbsp;

<div style="display: flex;
    text-align: center;
    align-content: flex-start;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
    justify-content: center;">
<a href="{{route('rudarstvo')}}"><img  src="assets/img/rudarstvo.png" alt="Istraživanje" style=""></a>
<a href="{{route('tehnicko-tehnoloski')}}"><img  src="assets/img/tehnoloski.png" alt="Istraživanje" style=""></a>
<a href="{{route('proizvodnja')}}"><img  src="assets/img/proizvodnja.png" alt="Istraživanje" style=""></a>
<a href="{{route('agroharbi')}}"><img  src="assets/img/agroharbi.png" alt="Istraživanje" style=""></a>
<a href="{{route('farmacija')}}"><img  src="assets/img/farmacija.png" alt="Istraživanje" style=""></a>
<a href="{{route('proizvodnja')}}"><img  src="assets/img/harbilab.png" alt="Istraživanje" style=""></a>
<a href="{{route('gradjevina')}}"><img  src="assets/img/građevinarstvo.png" alt="Istraživanje" style=""></a>
</div>
<br>
<a aria-pressed="true" class="btn btn-success btn-sm active" href="{{route('pocetna')}}" role="button" style="width: 200px;">{{ __('onama.saznajvise') }}</a></p>
</div>
</div>
</div>

<div class="slider-item js-fullheight" style="background-image:url(assets/img/slider2.jpg);">
<div class="overlay"></div>

<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
<div class="col-md-12 ftco-animate">
<div class="text w-100 text-center" style="justify-content: center;display: flex;"><img class="center" src="{{asset('img/logo.png')}}" style="margin-top:-20px; width:300px; height:auto;" /></div>
</div>
&nbsp;

<div style="display: flex;
    text-align: center;
    align-content: flex-start;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
    justify-content: center;">
<a href="{{route('rudarstvo')}}"><img  src="assets/img/rudarstvo.png" alt="Istraživanje" style=""></a>
<a href="{{route('tehnicko-tehnoloski')}}"><img  src="assets/img/tehnoloski.png" alt="Istraživanje" style=""></a>
<a href="{{route('proizvodnja')}}"><img  src="assets/img/proizvodnja.png" alt="Istraživanje" style=""></a>
<a href="{{route('agroharbi')}}"><img  src="assets/img/agroharbi.png" alt="Istraživanje" style=""></a>
<a href="{{route('farmacija')}}"><img  src="assets/img/farmacija.png" alt="Istraživanje" style=""></a>
<a href="{{route('proizvodnja')}}"><img  src="assets/img/harbilab.png" alt="Istraživanje" style=""></a>
<a href="{{route('gradjevina')}}"><img  src="assets/img/građevinarstvo.png" alt="Istraživanje" style=""></a>
</div>
<br>
<a aria-pressed="true" class="btn btn-success btn-sm active" href="{{route('pocetna')}}" role="button" style="width: 200px;">{{ __('onama.saznajvise') }}</a></p>
</div>
</div>
</div>
</div>

<script src="{{asset('kenan/js/jquery.min.js')}}"></script>
<script src="{{asset('kenan/js/popper.js')}}"></script>
<script src="{{asset('kenan/js/bootstrap.min.js')}}"></script>
<script src="{{asset('kenan/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('kenan/js/main.js')}}"></script>

<script>
  $(window).on('load', function () {
    $('.loader').hide();
  }) 
</script>

<script>
    $(".owl-carousel").on("initialized.owl.carousel", () => {
  setTimeout(() => {
    $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
    $("section").show();
  }, 200);
});


</script>
</html>