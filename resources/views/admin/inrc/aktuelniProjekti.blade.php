@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
        <h3 class="text-center"><strong>Aktuelni projekti</strong></h3>
    </div>
    <a href="{{route('addProjects')}}" class="btn btn-success" style="margin-bottom: 15px;">Dodaj novi projekat</a>
    <hr>
    <div class="row">
        <table id="general-table" class="table table-striped table-vcenter">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Naziv</th>
                    <th>Tip</th>
                    <th>Link</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projekti as $projekat)
                    <tr>
                        <td>{{$projekat->id}}</td>
                        <td>{{$projekat->name}}</td>
                        <td>{{$projekat->type}}</td>
                        <td><a href="{{asset('inrc/pregled.pdf')}}">{{$projekat->file}}</a></td>
                        <td>
                            <form action="{{ route('aktuelniProjekti') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$projekat->id}}">
                                <button type="submit" class="btn btn-danger">Izbriši</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h3 class="text-danger">Trenutno nema projekata</h3>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection