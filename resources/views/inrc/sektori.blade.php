@extends('default')

@section('content')
<main id="main">

<section id="about" class="about">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1>SEKTORI</h1>
    </div>
    <div class="row" data-aos="fade-bottom">
        <div class="col-3">
            <nav class="nav nav-pills flex-column flex-sm-row" style="display: inline !important;">
                <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="#">Active</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Longer nav link</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#">Link</a>
                <a class="flex-sm-fill text-sm-center nav-link disabled">Disabled</a>
            </nav>
        </div>
        <div class="col-8 bg-danger">
            <h3>test.blade.php</h3>
        </div>
    </div>
  </div>
</section>
@endsection