@extends('default')

@section('content')
<main id="main">
<section id="about" class="about" style="overflow: unset !important;">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
        <h1>PRIJAVA ZA POSAO</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-lg-12">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="ime" class="form-label">Ime</label>
                    <input type="name" class="form-control" id="ime" name="ime">
                </div>
                <div class="col-md-6">
                    <label for="prezime" class="form-label">Prezime</label>
                    <input type="name" class="form-control" id="prezime" name="prezime">
                </div>
                <div class="col-md-6">
                    <label for="drodjenja" class="form-label">Datum rođenja</label>
                    <input type="name" class="form-control" id="drodjenja" name="drodjenja">
                </div>
                <div class="col-md-6">
                    <label for="drzavljanstvo" class="form-label">Državljanstvo</label>
                    <input type="text" class="form-control" id="drzavljanstvo" name="drzavljanstvo">
                </div>
                <div class="col-md-6">
                    <label for="adresa" class="form-label">Adresa stanovanja</label>
                    <input type="text" class="form-control" id="adresa" name="adresa">
                </div>
                <div class="col-md-6">
                    <label for="grad" class="form-label">Grad stanovanja</label>
                    <input type="text" class="form-control" id="grad" name="grad">
                </div>
                <div class="col-md-6">
                    <label for="telefon" class="form-label">Kontakt telefon</label>
                    <input type="text" class="form-control" id="telefon" name="telefon">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-12">
                    <label for="posao" class="form-label">Izaberite radno mjesto na koje se prijavljujete</label>
                    <select name="radno_m" id="radno_m" class="form-select">
                        <option selected>Izaberite radno mjesto</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="vozacka" class="form-label">Vozačka dozvola</label>
                    <select name="vozacka" id="vozacka" class="form-select">
                        <option selected>Izaberite stavku</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="s_sprema" class="form-label">Stepen stručne spreme</label>
                    <select name="s_sprema" id="s_sprema" class="form-select">
                        <option selected>Izaberite stavku</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="n_skole" class="form-label">Naziv škole/fakultet</label>
                    <input type="text" name="n_skole" id="n_skole">
                </div>
                <div class="col-md-4">
                    <label for="s_zvanje" class="form-label">Stečeno zvanje</label>
                    <select name="s_sprema" id="s_sprema" class="form-select">
                        <option selected>Izaberite stavku</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Prijava</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</section>
@endsection