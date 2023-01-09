@extends('admin.default')

@section('adminContent')
    <div id="page-content">
        <div class="content-header">
            <h3 class="text-center"><strong>Izmjena posla {{$job->name}}</strong></h3>
        </div>

        
        @if(Session::has('message'))
            <h3 class="alert text-center themed-border-spring themed-background-spring text-white">{{ Session::get('message') }}</h3>
        @endif

        <div id="page-content">
            <div class="row">
                <div class="col-lg-10">
                    <!-- General Data Block -->
                    <div class="block">
                        <!-- General Data Title -->
                        <div class="block-title">
                            <h2><i class="fa fa-pencil"></i> <strong>Izmjena</strong> posla</h2>
                        </div>
                        <!-- END General Data Title -->
                        <form action="" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group @error('name') has-error @enderror">
                                <label class="col-md-3 control-label" for="name">Naziv pozicije</label>
                                <div class="col-md-9">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Upišite naziv pozicije" value="{{$job->name}}">
                                    @error('name')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('description') has-error @enderror">
                                <label class="col-md-3 control-label" for="description">Opis</label>
                                <div class="col-md-9">
                                    <textarea id="description" name="description" class="ckeditor">{{$job->opis}}</textarea>
                                    @error('description')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('date') has-error @enderror">
                                <label class="col-md-3 control-label" for="date">Datum trajanja oglasa do</label>
                                <div class="col-md-9">
                                    <input type="date" id="name" name="date" class="form-control" placeholder="Upišite naziv pozicije" value="{{$job->date}}">
                                    @error('date')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('img') has-error @enderror">
                                <label class="col-md-3 control-label" for="product-description">Slika</label>
                                <div class="col-md-9">
                                    <input type="file" name="img" id="img" class="form-control">
                                    @error('img')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-save"></i> Spasi</button>
                                </div>
                            </div>
                        </form>
                        <!-- END General Data Content -->
                    </div>
                    <!-- END General Data Block -->
                </div>
    </div>
@endsection