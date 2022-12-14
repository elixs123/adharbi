@extends('default')

@section('content')
<main id="main">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h1>{{ __('onama.misijaivizija') }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-left">
                <div class="content pt-12 pt-lg-0 pl-0 pl-lg-12 ">
                    <h3 class="text-center">{{ __('onama.misija') }}</h3>
                    <p>{{ __('onama.text_misija') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-left">
                <div class="content pt-12 pt-lg-0 pl-0 pl-lg-12 ">
                    <h3 class="text-center">{{ __('onama.vizija') }}</h3>
                    <p>{{ __('onama.text_vizija') }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection