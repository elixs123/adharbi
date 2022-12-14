
  <div class="top-nav" style="display: flow-root; padding: 5px; border-bottom: 1px #eee solid;background: #f4f4f4;text-transform: uppercase;">
    <div class="container">
    <div class="top-nav-contents" style="float: right;">
      <a href="{{route('changeLanguge', ['lang' => 'ba'])}}" style="color: #A2A2A2;" class="m-2 active"><i class="fa-solid fa-flag"></i> BA</a>

      <a href="{{route('changeLanguge', ['lang' => 'en'])}}" style="color: #A2A2A2;"><i class="fa-solid fa-flag"></i> ENG</a>
    </div>
    </div>
   
  </div>
 <header id="header" class="d-flex align-items-center">

<div class="container d-flex align-items-center justify-content-between">



  <div class="logo">

    <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="logo" style="width:120px; height:100px;" ></a>

  </div>



  <nav id="navbar" class="navbar">

    <ul>

      <li><a class="nav-link scrollto active" href="{{route('home')}}">{{ __('nav.pocetna') }}</a></li>

     <li class="dropdown"><a href="#about"><span>{{ __('nav.onama') }}</span> <i class="bi bi-chevron-down"></i></a>

      <ul>
            <li><a class="nav-link scrollto" href="{{route('historijat')}}">Historijat</a></li>
            <li><a class="nav-link scrollto" href="{{route('kosmo')}}">Ko smo - Djelatnost firme</a></li>
            <li><a class="nav-link scrollto" href="{{route('misijaivizija')}}">Misija vizija</a></li>
            <li><a class="nav-link scrollto" href="{{route('ostruktura')}}">Organizaciona struktura</a></li>
            <li><a class="nav-link scrollto" href="{{route('oposlovno')}}">Ostvarena poslovno naučna saradnja</a></li>
            <li><a class="nav-link scrollto" href="{{route('gallery')}}">Galerija</a></li>
      </ul>
      
      <li><a class="nav-link scrollto " href="{{route('news')}}">{{ __('nav.novosti') }}</a></li>
      
      <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/uizradi.html">{{ __('nav.opirofiltu') }}</a></li>
      
     <li class="dropdown"><a href="https://adharbi.mhds.ba/uizradi.html"><span>{{ __('nav.inrc') }}</span> <i class="bi bi-chevron-down"></i></a>

        <ul>

               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/uizradi.html">O INRC</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/uizradi.html">Sektori</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/uizradi.html">Aktuelni projekti</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/uizradi.html">Biblioteka objavljenih radova</a></li>
               

</ul>

      
       <li class="dropdown"><a href="#"><span>{{ __('nav.sektori') }}</span> <i class="bi bi-chevron-down"></i></a>

        <ul>

               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/rudarstvo.html">Rudarstvo</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/tehnoloski.html">Tehničko-Tehnološki</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/agroharbi.html">Agroharbi</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/farmacija.html">Farmacija</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/harbilab.html">Harbilab</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/proizvodnja.html">Proizvodnja</a></li>
               <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/gradjevinarstvo.html">Građevina</a></li>
               

</ul>

      <li><a class="nav-link scrollto" href="https://adharbi.mhds.ba/uizradi.html">{{ __('nav.webshop') }}</a></li>
      
      <li class="dropdown"><a href="https://adharbi.mhds.ba/uizradi.html"><span>{{ __('nav.odrzivost') }}</span> <i class="bi bi-chevron-down"></i></a>

        <ul>
          <li><a href="https://adharbi.mhds.ba/uizradi.html">Društvena odgovornost</a></li>
          <li><a href="https://adharbi.mhds.ba/uizradi.html">Sponzorstva i donacije</a></li>
          <li><a href="https://adharbi.mhds.ba/uizradi.html">Zahvalnice</a></li>
</ul>
</li>
      <li><a class="nav-link scrollto" href="#team">{{ __('nav.karijera') }}</a></li>


      <li><a class="nav-link scrollto" href="#contact">{{ __('nav.kontakt') }}</a></li>

    </ul>

    <i class="bi bi-list mobile-nav-toggle"></i>

  </nav><!-- .navbar -->



</div>

</header><!-- End Header -->