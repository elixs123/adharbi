@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
        <h3 class="text-center"><strong>Galerija</strong></h3>
    </div>
    <a href="{{route('adminAddGallery')}}" class="btn btn-success" style="margin-bottom: 15px;">Dodaj novu sliku</a>

        <div class="row">
            @foreach($gallerys as $gallery)
                <div class="col-sm-4 push">
                    <img src="{{asset('img/gallery/' . $gallery->img)}}" alt="image" class="img-responsive">
                </div>
            @endforeach
        </div>
</div>
@endsection