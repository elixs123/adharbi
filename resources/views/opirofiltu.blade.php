@extends('default')

@section('content')
<main id="main">

<section id="about" class="about">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1>{{ __('pirofilt.title')}}</h1>
    </div>
        <p>{{ __('pirofilt.text1') }}</p>
        <p>{{ __('pirofilt.text2') }}</p>
    
    <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
        {!! __('pirofilt.chemical') !!}
        </div>
        <div class="col-lg-6" data-aos="fade-right">
        {!! __('pirofilt.mineroloski') !!}
    </div>
    
    <div class="row">
        {!! __('pirofilt.fizickeosobe') !!}
    </div>
    <div class="row">
        <div class="col-12">
            <div id="my_pdf_viewer" style="margin: auto;padding: 10px;">
                <div id="canvas_container" style="margin: auto;width: 100%;">
                    <canvas id="pdf_renderer" width="100%"></canvas>
                </div>
            </div>
        </div>
    </div>
        {!!  __('pirofilt.domenprimjene') !!}
    <div class="row mt-5">
            <div class="col-lg-12">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active sektor">
                            <img src="{{asset('img/opirofiltu/20170919_105430.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/20170919_110440 - 1.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/20170919_1050461.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/20170919_1050461-2.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/DSC_5504.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/DSC_5514.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/DSC_5516.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/DSC_5522.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/DSC_5524.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/DSC_5528.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/GRANULACIJA 0-2 MM.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/KRUPNIJA GRANULACIJA.jpg')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item sektor">
                            <img src="{{asset('img/opirofiltu/PIROFILIT VEĆA GRANULACIJA 2.jpg')}}" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
        var myState = {
            pdf: null,
            currentPage: 1,
            zoom: 2
        } 

        var url = "{{ App::currentLocale() == 'en' ? asset('pdf/pirofilten.pdf') : asset('pdf/pirfoiltba.pdf') }}"

        $('.list-group-item').click(function(){
          console.log(url)
          url =  $(this).attr('value')
          pdfjsLib.getDocument(url).then((pdf) => {
            
            console.log(url)
            myState.pdf = pdf;
            myState.currentPage = 1
            render();
          });
        })

      
        function goNext(){
          if(myState.currentPage == 3){
            $("#my_pdf_viewer").hide();
            $(".projects").hide();
            $('.showContact').show();
            
            return false
          }

          pdfjsLib.getDocument(url).then((pdf) => {
     
            myState.pdf = pdf;
            myState.currentPage = myState.currentPage+1
            render();
          });
        }

        function goBack(){
          if(myState.currentPage <= 1){
            return false
          }

          pdfjsLib.getDocument(url).then((pdf) => {
     
            myState.pdf = pdf;
            myState.currentPage = myState.currentPage+1
            render();
          });
        }
     
        pdfjsLib.getDocument(url).then((pdf) => {
     
            myState.pdf = pdf;
            render();
        });

        function render() {
            myState.pdf.getPage(myState.currentPage).then((page) => {
         
                var canvas = document.getElementById("pdf_renderer");
                var ctx = canvas.getContext('2d');
     
                var viewport = page.getViewport(myState.zoom);
                canvas.width = viewport.width;
                canvas.height = viewport.height;
         
                page.render({
                    canvasContext: ctx,
                    viewport: viewport
                });
            });
        }
    </script>

@endsection