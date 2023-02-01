@extends('default')

@section('content')

<div class="container" style="margin-top: -77px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="60000">
        <div class="carousel-inner">
            <div class="carousel-item active img-fluid">
                <img src="{{asset('assets/img/sliders/slider1.jpg')}}" class="d-block w-100" alt="{{asset('assets/img/sliders/slider1.jpg')}}" style="height: 80vh;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/sliders/slider2.jpg')}}" class="d-block w-100" alt="{{asset('assets/img/sliders/slider2.jpg')}}" style="height: 80vh;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/sliders/slider4.jpg')}}" class="d-block w-100" alt="{{asset('assets/img/sliders/slider4.jpg')}}" style="height: 80vh;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/sliders/slider5.jpg')}}" class="d-block w-100" alt="{{asset('assets/img/sliders/slider5.jpg')}}" style="height: 80vh;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/sliders/slider6.jpg')}}" class="d-block w-100" alt="{{asset('assets/img/sliders/slider6.jpg')}}" style="height: 80vh;">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/sliders/slider3.jpg')}}" class="d-block w-100" alt="{{asset('assets/img/sliders/slider3.jpg')}}" style="height: 80vh;">
            </div>
            <div class="text-img" style="cursor: pointer; z-index: 100;height: 40px;position: absolute;bottom: 0px;width: 100%; text-align: left;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.5);border-color: rgb(24, 17, 12);width: 100%;border-color: rgba(24, 17, 12);">
                @if(Config::get('app.locale') == 'ba')
                    <h3 onclick="showMoreBa()" class="text-slider" style="letter-spacing: 2px;text-align:center;font-family: 'segoe ui';text-transform: uppercase;font-size: 11px;color: #fff;margin: 0;padding: 13px">{{ __('home.slider1') }}</h3>
                @elseif(Config::get('app.locale') == 'en')
                    <h3 onclick="showMoreEn()" class="text-slider" style="letter-spacing: 2px;text-align:center;font-family: 'segoe ui';text-transform: uppercase;font-size: 11px;color: #fff;margin: 0;padding: 13px">{{ __('home.slider1') }}</h3>
                @endif
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        
    </div>
    <div class="col-12">
        <a href="{{route('pocetna')}}" class="mt-2 p-2 d-block text-center fw-bold" style="text-decoration: none; color: black;font-family: 'Arial,sans-serif';font-size: 20px;line-height: 1.42857143">Intro <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
<script>
    var clicked = false;
    function showMoreBa(){
        var text = $(".text-slider").html();
        if(!clicked){
            $(".text-img").css('height', '80')
            $(".text-slider").html(text + ', Direktor Muhamed Harbinja i predsjednik N.O. Atif Hodžić,  firme AD Harbi d.o.o. predstavljali su našu zemlju, kao i kompaniju na „The Fair of Mining, Power Industry and Metallurgy in city Katowice in Poland“ u periodu od 05-09.09.2022.godine. Korisne posjete firmama kao što su „Center of Entrepreneurship Smolna“ iz Varšave, „Komag – Insitute of Mining and Metalurgy“ Gliwce, „Famur“ Katowice, i „Damel Company“ Gornicza.');
            
            clicked = true
        }else{
            $(".text-img").css('height', '40')
            $(".text-slider").html('05-09.09.22. - The Fair of Mining, Power Industry and Metallurgy in city Katowice in Poland Poslati od strane Privredne komore FBiH');
            
            clicked = false
        }
    }

    function showMoreEn(){
        var text = $(".text-slider").html();
        if(!clicked){
            $(".text-img").css('height', '80')
            $(".text-slider").html(text + ', Director Muhamed Harbinja and Chairman of the Supervisory Board Atif Hodžić, company AD Harbi d.o.o. represented our country, as well as the company, at "The Fair of Mining, Power Industry and Metallurgy in the city of Katowice in Poland" in the period from September 5-9, 2022.Useful visits to companies such as "Center of Entrepreneurship Smolna" from Warsaw, "Komag - Insitute of Mining and Metallurgy" Gliwce, "Famur" Katowice, and "Damel Company" Gornicza.');
            
            clicked = true
        }else{
            $(".text-img").css('height', '40')
            $(".text-slider").html('05-09.09.22. - The Fair of Mining, Power Industry and Metallurgy in city Katowice in Poland Sent by the FBiH Chamber of Commerce');
            
            clicked = false
        }
    }
</script>
@endsection