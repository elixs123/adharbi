@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
        <h3 class="text-center"><strong>Dodaj novu sliku u galeriju</strong></h3>
    </div>
        @if(Session::has('message'))
            <h3 class="alert text-center themed-border-spring themed-background-spring text-white">{{ Session::get('message') }}</h3>
        @endif
       
        <div class="row">
            <div class="col-sm-10">
                    <form action="{{route('adminAddGallery')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group @error('img') has-error @enderror">
                            <label class="col-md-3 control-label" for="img">Slika</label>
                            <div class="col-md-9">
                                <input type="file" id="img" name="img" class="form-control">
                                @error('img')
                                 <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="form-group @error('year') has-error @enderror">
                            <label class="col-md-3 control-label" for="year">Godina</label>
                            <div class="col-md-3">
                                <input type="text" id="year" name="year" class="form-control" placeholder="Upišite godinu">
                                @error('year')
                                 <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group @error('ba') has-error @enderror">
                            <label class="col-md-3 control-label" for="ba">Bosanski text</label>
                            <div class="col-md-8">
                                <input type="text" id="ba" name="ba" class="form-control" placeholder="Upišite bosanski text">
                                @error('ba')
                                 <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group @error('en') has-error @enderror">
                            <label class="col-md-3 control-label" for="en">Engleski text</label>
                            <div class="col-md-8">
                                <input type="text" id="en" name="en" class="form-control" placeholder="Upišite engleski text">
                                @error('en')
                                 <span class="help-block">{{ $message }}</span>
                                @enderror
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