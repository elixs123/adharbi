@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>{{ __('posao.title') }}</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-lg-12">
            <form class="row g-3" method="POST" action="{{route('prijavazaposao')}}" enctype="multipart/form-data">
                @csrf
                <h2>{{ __('posao.informacije') }}</h2>
                <div class="col-md-6">
                    <label for="ime" class="form-label">{{ __('posao.name') }}</label>
                    <input type="name" class="form-control @error('name') border border-danger @enderror" id="ime" name="ime">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="prezime" class="form-label">{{ __('posao.lastname') }}</label>
                    <input type="name" class="form-control @error('prezime') border border-danger @enderror" id="prezime" name="prezime">
                    @error('prezime')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="drodjenja" class="form-label">{{ __('posao.dateofbeard') }}</label>
                    <input type="name" class="form-control @error('drodjenja') border border-danger @enderror" id="drodjenja" name="drodjenja">
                    @error('drodjenja')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="drzavljanstvo" class="form-label">{{ __('posao.citizenship') }}</label>
                    <input type="text" class="form-control @error('drzavljanstvo') border border-danger @enderror" id="drzavljanstvo" name="drzavljanstvo">
                    @error('drzavljanstvo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="adresa" class="form-label">{{ __('posao.address') }}</label>
                    <input type="text" class="form-control @error('adresa') border border-danger @enderror" id="adresa" name="adresa">
                    @error('adresa')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="grad" class="form-label">{{ __('posao.city') }}</label>
                    <input type="text" class="form-control @error('grad') border border-danger @enderror" id="grad" name="grad">
                    @error('grad')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="telefon" class="form-label">{{ __('posao.phone') }}</label>
                    <input type="text" class="form-control @error('telefon') border border-danger @enderror" id="telefon" name="telefon">
                    @error('telefon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">{{ __('posao.email') }}</label>
                    <input type="text" class="form-control @error('email') border border-danger @enderror" id="email" name="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="posao" class="form-label">{{ __('posao.chosejob') }}</label>
                    <select name="posao" id="posao" class="form-select @error('posao') border border-danger @enderror">
                        <option selected>{{ __('posao.chosejobinput') }}</option>
                        @forelse($alljobs as $job)
                            <option value="{{$job->name}}">{{$job->name}}</option>
                        @empty
                            <option disabled>Nema otvoreni pozicija</option>
                        @endforelse
                    </select>
                    @error('posao')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 @error('vozacka') border border-danger @enderror">
                    <label for="vozacka" class="form-label">{{ __('posao.driverlicense') }}</label>
                    <select name="vozacka" id="vozacka" class="form-select">
                        <option selected>{{ __('posao.driverlicenseinput') }}</option>
                        <option value="Da">Da</option>
                        <option value="Da">Ne</option>
                    </select>
                    @error('vozacka')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <h2>{{ __('posao.schoolinfo') }}</h2>
                <div class="col-md-4">
                    <label for="s_sprema" class="form-label">{{ __('posao.schoolinfo1') }}</label>
                    <select name="s_sprema" id="s_sprema" class="form-select @error('s_sprema') border border-danger @enderror">
                        <option selected>{{ __('posao.schoolinfo1input') }}</option>
                        <option value="Nekvalifikovani radnik">Nekvalifikovani radnik</option>
                        <option value="Srednja strucna sprema">Srednja stručna sprema</option>
                        <option value="Visoko kvalifikovan">Visoko kvalifikovan</option>
                        <option value="Viša stručna sprema">Viša stručna sprema</option>
                        <option value="Visoka stručna sprema">Visoka stručna sprema</option>
                        <option value="Magistar nauka">Magistar nauka</option>
                    </select>
                    @error('s_sprema')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="n_skole" class="form-label @error('n_skole') border border-danger @enderror">{{ __('posao.schoolname') }}</label>
                    <input type="text" name="n_skole" id="n_skole" class="form-control">
                    @error('n_skole')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="s_zvanje" class="form-label @error('s_zvanje') border border-danger @enderror">{{ __('posao.schooldiplom') }}</label>
                    <input type="text" name="s_zvanje" id="s_zvanje" class="form-control">
                    @error('s_zvanje')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <h2>{{ __('posao.jobexperince') }}</h2>
                <h6>{{ __('posao.jobexperinecetext') }}</h6>
                <div class="col-md-4">
                    <label for="n_kompanije" class="form-label @error('n_kompanije') border border-danger @enderror">Naziv kompanije</label>
                    <input type="text" name="n_kompanije" id="n_kompanije" class="form-control">
                    @error('n_kompanije')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="radno_m" class="form-label @error('radno_m') border border-danger @enderror">Radno mjesto</label>
                    <input type="text" name="radno_m" id="radno_m" class="form-control">
                    @error('radno_m')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="v_period" class="form-label @error('v_period') border border-danger @enderror">Vremenski period</label>
                    <input type="text" name="v_period" id="v_period" class="form-control">
                    @error('v_period')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <h2>Poznavanje rada na računaru</h2>
                <div class="col-md-12">
                    <label for="ms_excel" class="form-label @error('ms_excel') border border-danger @enderror">MS Excel</label>
                    <select name="ms_excel" id="ms_excel" class="form-select">
                        <option selected>Izaberite stakvu</option>
                        <option value="Ne poznajem">Ne poznajem</option>
                        <option value="pocetnik">Početnik</option>
                        <option value="Korisnik">Korisnik</option>
                        <option value="Napredni korisnik">Napredni korisnik</option>
                    </select>
                    @error('ms_excel')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <h2>Znanje stranih jezika</h2>
                <div class="col-md-12">
                    <label for="jezici" class="form-label @error('jezici') border border-danger @enderror">Engleski jezik</label>
                    <select name="jezici" id="jezici" class="form-select">
                        <option selected>Izaberite stakvu</option>
                        <option value="Ne poznajem">Ne poznajem</option>
                        <option value="pocetnik">Početnik</option>
                        <option value="Korisnik">Korisnik</option>
                        <option value="Napredni korisnik">Napredni korisnik</option>
                    </select>
                    @error('jezici')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <h2>Pismo motivacije</h2>
                <div class="col-md-12">
                   <textarea name="motivacion_p" class="form-control @error('motivacion_p') border border-danger @enderror" id="motivacion_p" cols="30" rows="10"></textarea>
                    @error('motivacion_p')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="biografija" class="form-label @error('biografija') border border-danger @enderror">Biografija</label>
                    <input type="file" name="biografija" id="biografija" class="form-control">
                    @error('biografija')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">POŠALJI</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</section>
@endsection
