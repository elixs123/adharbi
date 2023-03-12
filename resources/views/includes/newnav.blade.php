
  <div class="top-nav" style="display: flow-root; padding: 5px; border-bottom: 1px #eee solid;background: #f4f4f4;text-transform: uppercase;">
    <div class="container">
    <div class="top-nav-contents" style="float: right;">
      <a href="{{route('changeLanguge', ['lang' => 'ba'])}}" style="color: #A2A2A2;text-decoration:none;" class="m-2 active"><span class="fi fi-ba fis"></span> BA</a>

      <a href="{{route('changeLanguge', ['lang' => 'en'])}}" style="color: #A2A2A2;text-decoration:none;"><span class="fi fi-gb fis"></span> ENG</a>
    </div>
    </div>
   
  </div>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}" style="padding: 0;padding-top: 20px;"><img src="{{asset('img/logo.png')}}" alt="logo" style="width:120px; height:100px;padding: 12px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
          <a class="nav-link"  href="{{route('opirofiltu')}}">{{ __('nav.opirofiltu') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('news')}}">{{ __('nav.novosti') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('nav.inrc') }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('oinrc')}}">{{ __('inrc.oinrc') }}</a></li>
            <li><a class="dropdown-item" href="{{route('sektori')}}">{{ __('inrc.sektori') }}</a></li>
            <li><a class="dropdown-item" href="{{route('projekti')}}">{{ __('inrc.posteri') }}</a></li>
            <li><a class="dropdown-item" href="{{route('biblioteka')}}">{{ __('inrc.libary') }}</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ __('nav.sektori') }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('rudarstvo')}}">RUDARSTVO</a></li>
            <li><a class="dropdown-item" href="{{route('tehnicko-tehnoloski')}}">TEHNIČKO-TEHNOLOŠKI</a></li>
            <li><a class="dropdown-item" href="{{route('agroharbi')}}">AGROHARBIi</a></li>
            <li><a class="dropdown-item" href="{{route('farmacija')}}">FARMACIJA</a></li>
            <li><a class="dropdown-item" href="{{route('harbilab')}}">HARBILAB</a></li>
            <li><a class="dropdown-item" href="{{route('proizvodnja')}}">PROIZVODNJA</a></li>
            <li><a class="dropdown-item" href="{{route('gradjevina')}}">GRAĐEVINA</a></li>
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
            <li><a class="dropdown-item" href="{{route('historijat')}}">{{ __('nav.drustvenaodgovornost') }}</a></li>
            <li><a class="dropdown-item" href="{{route('kosmo')}}">{{ __('nav.sponzorstva') }}</a></li>
            <li><a class="dropdown-item" href="{{route('ostruktura')}}">{{ __('nav.zahvalnice') }}</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('nav.karijera') }}</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('prijavazaposao')}}">{{ __('nav.prijavazaposao') }}</a></li>
            <li><a class="dropdown-item" href="{{route('openjobs')}}">{{ __('nav.otvorenepozicije') }}</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">{{ __('nav.kontakt') }}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>