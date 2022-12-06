@extends('admin.default')

@section('adminContent')
<!-- Page content -->
<div id="page-content">
        <!-- eCommerce Product Edit Header -->
        <div class="content-header">
           <h3 class="text-center"><strong>Rudarstvo</strong></h3>
        </div>
        <!-- END eCommerce Product Edit Header -->

        <!-- Product Edit Content -->
        <div class="row">
            <div class="col-lg-12">
                <!-- General Data Block -->
                <div class="block">
                    <!-- General Data Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-pencil"></i> <strong>Editovanje</strong> stranice Rudarstvo</h2>
                    </div>
                    <!-- END General Data Title -->

                    <!-- General Data Content -->
                    <form action="{{route('adminHome')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea id="product-description" name="text" class="ckeditor">{{$sub_page[0]->text}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group form-actions">
                            <div class="col-md-12 col-md-offset-0">
                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-floppy-o"></i> Spasi</button>
                            </div>
                        </div>
                    </form>
                    <!-- END General Data Content -->
                </div>
                <!-- END General Data Block -->
            </div>
            <div class="col-lg-12">
                <!-- Meta Data Block -->
                <div class="block">
                    <!-- Meta Data Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-google"></i> <strong>Dodavanje</strong> stranice Rudarstvo navigacije</h2>
                    </div>
                    <!-- END Meta Data Title -->

                    <!-- Meta Data Content -->
                    <form action="{{route('adminHome')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="add_nav_page">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea id="product-description" name="text" class="ckeditor"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group form-actions">
                            <div class="col-md-12 col-md-offset-0">
                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-floppy-o"></i> Spasi</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Meta Data Content -->
                </div>
                <!-- END Meta Data Block -->

               
                <!-- END Product Images Block -->
            </div>
             <!-- Product Images Block -->
            <div class="col-lg-6">
                <!-- Meta Data Block -->
                <div class="block">
                    <!-- Meta Data Title -->
                    <div class="block-title">
                        <h2><i class="fa fa-google"></i> <strong>Editovanje</strong> stranice Rudarstvo navigacije</h2>
                    </div>
                    <!-- END Meta Data Title -->

                    <!-- Meta Data Content -->
                    <form action="{{route('adminHome')}}" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea id="product-description" name="text" class="ckeditor"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group form-actions">
                            <div class="col-md-12 col-md-offset-0">
                                <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-floppy-o"></i> Spasi</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Meta Data Content -->
                </div>
                <!-- END Meta Data Block -->
            </div>
           <!-- end editovanje -->
        </div>
        <!-- END Product Edit Content -->
    </div>
    <!-- END Page Content -->
@endsection