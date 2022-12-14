@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
        <h3 class="text-center"><strong>Izmjeni novost {{$new[0]->name}}</strong></h3>
    </div>
    <div class="row">
            <div class="col-sm-10">
                    <form action="{{route('adminEditNews', ['id' => request()->id])}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group @error('name') has-error @enderror">
                            <label class="col-md-3 control-label" for="name">Naziv</label>
                            <div class="col-md-9">
                                <input type="text" id="name" name="name" class="form-control" value="{{$new[0]->name}}">
                            </div>
                        </div>
                        <div class="form-group @error('description') has-error @enderror">
                            <label class="col-md-3 control-label" for="description">Opis</label>
                            <div class="col-md-9">
                                <textarea id="product-description" name="description" class="ckeditor">{{$new[0]->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group @error('img') has-error @enderror">
                            <label class="col-md-3 control-label" for="img">Slika</label>
                            <div class="col-md-9">
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Spasi</button>
                            </div>
                        </div>
                        
                    </form>
            </div>
        </div>
</div>
@endsection