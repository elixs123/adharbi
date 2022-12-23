
  <div class="top-nav" style="display: flow-root; padding: 5px; border-bottom: 1px #eee solid;background: #f4f4f4;text-transform: uppercase;">
    <div class="container">
    <div class="top-nav-contents" style="float: right;">
      <a href="{{route('changeLanguge', ['lang' => 'ba'])}}" style="color: #A2A2A2;" class="m-2 active"><i class="fa-solid fa-flag"></i> BA</a>

      <a href="{{route('changeLanguge', ['lang' => 'en'])}}" style="color: #A2A2A2;"><i class="fa-solid fa-flag"></i> ENG</a>
    </div>
    </div>
   
  </div>
<nav class="navbar navbar-expand-lg bg-light" style="height: 142px;
    padding: 0;
    height: 90px;
    transition: all 0.5s;
    z-index: 997;
    transition: all 0.5s;
    background: #fff;
    box-shadow: 0 4px 10px -3px hsl(0deg 0% 75% / 50%);">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}" style="padding: 0;padding-top: 20px;"><img src="{{asset('img/logo.png')}}" alt="logo" style="width:120px; height:100px;padding: 12px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 9% !important;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{ __('nav.pocetna') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('nav.onama') }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('historijat')}}">{{ __('nav.onama_historijat') }}</a></li>
            <li><a class="dropdown-item" href="{{route('kosmo')}}">{{ __('nav.onama_kosmo') }}</a></li>
            <li><a class="dropdown-item" href="{{route('misijaivizija')}}">{{ __('nav.onama_misija') }}</a></li>
            <li><a class="dropdown-item" href="{{route('ostruktura')}}">{{ __('nav.onama_organizaciona') }}</a></li>
            <li><a class="dropdown-item" href="{{route('oposlovno')}}">{{ __('nav.onama_ostvarena') }}</a></li>
            <li><a class="dropdown-item" href="{{route('gallery')}}">{{ __('nav.galerija') }}</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('news')}}">{{ __('nav.novosti') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('nav.inrc') }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('oinrc')}}">O INRC</a></li>
            <li><a class="dropdown-item" href="{{route('sektori')}}">SEKTORI</a></li>
            <li><a class="dropdown-item" href="{{route('projekti')}}">Aktuelni projekti</a></li>
            <li><a class="dropdown-item" href="{{route('biblioteka')}}">Biblioteka objavljenih radova</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ __('nav.sektori') }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('historijat')}}">Rudarstvo</a></li>
            <li><a class="dropdown-item" href="{{route('kosmo')}}">Tehničko-Tehnološki</a></li>
            <li><a class="dropdown-item" href="{{route('ostruktura')}}">Agroharbi</a></li>
            <li><a class="dropdown-item" href="{{route('misijaivizija')}}">Farmacija</a></li>
            <li><a class="dropdown-item" href="{{route('misijaivizija')}}">Harbilab</a></li>
            <li><a class="dropdown-item" href="{{route('misijaivizija')}}">Proizvodnja</a></li>
            <li><a class="dropdown-item" href="{{route('misijaivizija')}}">Građevina</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">{{ __('nav.webshop') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ __('nav.odrzivost') }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('historijat')}}">Društvena odgovornost</a></li>
            <li><a class="dropdown-item" href="{{route('kosmo')}}">Sponzorstva i donacije</a></li>
            <li><a class="dropdown-item" href="{{route('ostruktura')}}">Zahvalnice</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">{{ __('nav.karijera') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">{{ __('nav.kontakt') }}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>