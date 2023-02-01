@extends('default')

@section('content')
<main id="main">
    <div class="container elix-justify">
        <div class="section-title" data-aos="fade-up">
            <h1>{{ __('onama.historijat') }}<h1>
        </div>
        <div class="row">
            <div class="col-lg-3" data-aos="fade-right" style="padding: 0;margin:0">
                <div class="image">
                    <img src="{{asset('img/historijat0.jpg')}}" style="width:auto; height: 400px;"  alt="{{asset('img/historijat0.jpg')}}">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <p>{{ __('onama.text_historijat_1') }}</p>
                    <p>{{ __('onama.text_historijat_2') }}</p>
                    <p>{{ __('onama.text_historijat_3') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <p>{{ __('onama.text_historijat_4') }}</p>
                    <p>{{ __('onama.text_historijat_5') }}</p>
                    <p>{{ __('onama.text_historijat_6') }}</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="image">
                    <img src="{{asset('img/historijat1.jpg')}}" style="width:auto; height: 400px;"  alt="{{asset('img/historijat1.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection