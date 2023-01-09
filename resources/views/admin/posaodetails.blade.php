@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
        <h3 class="text-center"><strong>Prijavljeni za posao detaljno</strong></h3>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Customer Info Block -->
            <div class="block">
                <!-- Customer Info Title -->
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Informacije</strong></h2>
                </div>
                <!-- END Customer Info Title -->

                <!-- Customer Info -->
                <div class="block-section text-center">
                    <h3>
                        <strong>{{ucfirst($job->ime)}} {{ucfirst($job->prezime)}}</strong><br><small></small>
                    </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Datum rođenja</strong></td>
                            <td>{{$job->drodjenja}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Državljanstvo</strong></td>
                            <td>{{$job->drzavljanstvo}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Adresa stanovanja</strong></td>
                            <td>{{$job->adresa}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Grad stanovanja</strong></td>
                            <td>{{$job->grad}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Kontakt telefon</strong></td>
                            <td>{{$job->telefon}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Email</strong></td>
                            <td>{{$job->email}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Radno mjesto</strong></td>
                            <td>{{$job->posao}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Vozačka dozvola</strong></td>
                            <td>{{$job->vozacka}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Stepen stručne spreme</strong></td>
                            <td>{{$job->s_sprema}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Naziv škole/fakultet</strong></td>
                            <td>{{$job->n_skole}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Stečeno zvanje</strong></td>
                            <td>{{$job->s_zvanje}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Naziv kompanije</strong></td>
                            <td>{{$job->n_kompanije}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Radno mjesto</strong></td>
                            <td>{{$job->radno_m}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Vremenski period</strong></td>
                            <td>{{$job->v_period}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>MS Excel</strong></td>
                            <td>{{$job->ms_excel}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Engleski jezik</strong></td>
                            <td>{{$job->jezici}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Pismo motivacije</strong></td>
                            <td>{{$job->motivaciono_p}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Datum prijave</strong></td>
                            <td>{{ $job->created_at }}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Biografija</strong></td>
                            <td><a href="{{ asset('posao/'. $job->biografija)}}">Preuzmi biografiju</td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Customer Info -->
            </div>
        </div>
     </div>
</div>
@endsection