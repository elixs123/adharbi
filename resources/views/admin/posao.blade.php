@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <div class="content-header">
        <h3 class="text-center"><strong>Prijavljeni za posao</strong></h3>
    </div>

    <div id="page-content">
        <div class="content-header">
            <ul class="nav-horizontal text-center">
                <li  class="active">
                    <a href="{{route('posao')}}"><i class="gi gi-user"></i> Prijavljeni</a>
                </li>
                <li>
                    <a href="{{route('alljobs')}}"><i class="fa fa-bar-chart"></i> Sve pozicije</a>
                </li>
                <li>
                    <a href="{{route('addjobs')}}"><i class="gi gi-pencil"></i>Dodaj poziciju</a>
                </li>
                
            </ul>
        </div>  
        

        <!-- All Jobs Block -->
        <div class="block full">
            <!-- All Jobs Title -->
            <div class="block-title">
                <h2><strong>Svi</strong> Prijavljeni</h2>
            </div>
            <!-- END All Jobs Title -->

            <!-- All Jobs Content -->
            <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 70px;">ID</th>
                        <th>Ime i Prezime</th>
                        <th class="text-right hidden-xs">Pozicija</th>
                        <th class="hidden-xs">Status</th>
                        <th class="hidden-xs text-center">Datum prijave</th>
                        <th class="text-center">Opcije</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                    <tr>
                        <td class="text-center"><a href="{{route('posaoDetails', ['id' => $job->id])}}"><strong>{{$job->id}}</strong></a></td>
                        <td><a href="{{route('posaoDetails', ['id' => $job->id])}}">{{ucfirst($job->ime)}} {{ucfirst($job->prezime)}}</a></td>
                        <td class="text-right hidden-xs"><strong>{{$job->posao}}</strong></td>
                        <td class="hidden-xs">
                            @if($job->reads)
                            <span class="label label-success p-2">Pročitano</span>
                            @else
                            <span class="label label-default p-2">Nepročitano</span>
                            @endif
                        </td>
                        <td class="hidden-xs text-center">{{ \Carbon\Carbon::parse($job->created_at)->format('d.m.Y H:i:s')}} </td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="{{route('posaoDetails', ['id' => $job->id])}}" data-toggle="tooltip" title="Pogledaj" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6"><h3 class="text-center">Nema prijavljenih kandidata</h3></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <!-- END All Jobs Content -->
        </div>
    </div>

</div>
@endsection