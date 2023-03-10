@extends('default')

@section('content')
<main id="main">
    <div class="container elix-justify">
        <div class="section-title" data-aos="fade-up">
            <h1>{{ __('onama.onama') }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-left">
                <div class="content pt-12 pt-lg-0 pl-0 pl-lg-12 m-bottom">
                    <p>{{ __('onama.text_onama_1') }} {{ __('onama.text_onama_2') }} {{ __('onama.text_onama_3') }} {{ __('onama.text_onama_4') }} {{ __('onama.text_onama_5') }} {{ __('onama.text_onama_6') }} {{ __('onama.text_onama_7') }} {{ __('onama.text_onama_8') }} {{ __('onama.text_onama_9') }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection