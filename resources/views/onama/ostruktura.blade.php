@extends('default')

@section('content')
<main id="main">
    <div class="container">
        <div class="section-title m-0 p-0" data-aos="fade-up">
            <h1>{{ __('onama.ostruktura') }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right" style="padding: 0;margin:0">
                <div class="image">
                    <img src="{{asset('img/organizacionastruktura.png')}}" style="width:100%;"  alt="{{asset('img/organizacionastruktura.png')}}">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection