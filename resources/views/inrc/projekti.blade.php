@extends('default')

@section('content')
<main id="main">

<section id="about" class="about">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h1>POSTERI</h1>
    </div>
    <div class="row">

     <div style="margin: auto;width: 50%;padding: 10px;" class="showContact">
     <h3 class="text-danger">Molimo Vas da nas kontaktirate putem emaila za preuzimanje dokumenta</h3>
        <form action="{{route('contact')}}" method="post" data-aos="fade-left">
            @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('contact.tvoje_ime') }}" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('contact.tvoj_email') }}" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('contact.predmet') }}" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="{{ __('contact.poruka') }}" required></textarea>
          </div>
          <button type="submit" class="btn btn-success mt-2">{{ __('contact.posalji') }}</button>
        </form>
     </div>
     <div class="col-2">
      <ul class="list-group projects">
        @foreach($projekti as $projekat)
          <li class="list-group-item harbi-active cursor-pointer" style="cursor: pointer;" id="test" aria-current="true" value="{{asset('inrc/'.$projekat->file)}}">{{$projekat->name}}</li>
        @endforeach
      </ul>
     </div>
      <div class="col-10">
        <div id="my_pdf_viewer" style="margin: auto;padding: 10px;">
      
          <div id="canvas_container" style="margin: auto;width: 80%;">
              <canvas id="pdf_renderer" width="100%"></canvas>
          </div>
          <hr>
          <div id="navigation_controls">
              <button id="go_previous" onClick="goBack()"  class="btn btn-success">Nazad</button>
              <button id="go_next" onClick="goNext()" class="btn btn-success" style="float: right;">Naprijed</button>
          </div>
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
            zoom: 1
        } 

        var url = '{{asset("inrc/pregled.pdf")}}'

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