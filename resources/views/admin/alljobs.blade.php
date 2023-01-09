@extends('admin.default')

@section('adminContent')
    <div id="page-content">
        <div class="content-header">
            <h3 class="text-center"><strong>Sve pozicije</strong></h3>
        </div>
        @if(Session::has('message'))
            <h3 class="alert text-center themed-border-spring themed-background-spring text-white">{{ Session::get('message') }}</h3>
        @endif

        @if(Session::has('danger'))
            <h3 class="alert text-center themed-border-fire themed-background-fire text-white">{{ Session::get('danger') }}</h3>
        @endif

        <div id="page-content">
            <!-- eCommerce Product Edit Header -->
            <div class="content-header">
                <ul class="nav-horizontal text-center">
                    <div class="content-header">
                        <ul class="nav-horizontal text-center">
                            <li>
                                <a href="{{route('posao')}}"><i class="gi gi-user"></i> Prijavljeni</a>
                            </li>
                            <li  class="active">
                                <a href="{{route('alljobs')}}"><i class="fa fa-bar-chart"></i> Sve pozicije</a>
                            </li>
                            <li>
                                <a href="{{route('addjobs')}}"><i class="gi gi-pencil"></i>Dodaj poziciju</a>
                            </li>
                            
                        </ul>
                    </div>  
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-10">
                    <div class="block">
                        <div class="block-title">
                            <h2><i class="fa fa-picture-o"></i> <strong>Sve</strong> pozicije</h2>
                        </div>
                        <table class="table table-bordered table-striped table-vcenter">
                            <tbody>
                                @foreach($alljobs as $job)
                                    <tr>
                                        <td style="width: 20%;">
                                            <a href="# data-toggle="lightbox-image">
                                                <img src="{{asset('img/jobs/' . $job->img)}}" alt="" class="img-responsive center-block" style="max-width: 110px;">
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            {{$job->name}}
                                        </td>
                                        <td class="text-center">
                                            @if($job->active == 1 AND $job->date > date('Y-m-d'))
                                                <b><span class="text-success text-center">Aktivan</span></b>
                                            @else
                                                <b><span class="text-danger text-center">Nije aktivan</span></b>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if($job->active == 1 AND $job->date > date('Y-m-d'))
                                                <b><span class="text-center">Aktivan do: {{$job->date}}</span></b>
                                            @else
                                                <b><span class="text-center">Trajao do: {{$job->date}}</span></b>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div style="display: inline-flex;">
                                                <form action="{{route('alljobs')}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{$job->id}}">
                                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i> Izbriši</button>
                                                </form>
                                                @if($job->active == 1 AND $job->date > date('Y-m-d'))
                                                    <form action="{{route('alljobs')}}" method="post"  style="margin-left: 10px;">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$job->id}}">
                                                        <input type="hidden" name="active" value="0">
                                                        <button class="btn btn-danger" type="submit"><i class="fa fa-minus"></i> Deaktiviraj</button>
                                                    </form>
                                                @else
                                                    <form action="{{route('alljobs')}}" method="post"  style="margin-left: 10px;">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$job->id}}">
                                                        <input type="hidden" name="active" value="1">
                                                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Aktiviraj</button>
                                                    </form>
                                                @endif
                                                    <a href="{{route('editjob', ['id' => $job->id])}}" class="btn btn-warning" type="submit" style="margin-left: 10px;"><i class="fa fa-edit"></i> Izmijeni</a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- END Product Images Content -->
                    </div>
                    <!-- END Product Images Block -->
                </div>
    </div>
@endsection