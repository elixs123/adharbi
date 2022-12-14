@extends('admin.default')

@section('adminContent')
<div id="page-content">
    <!-- eCommerce Product Edit Header -->
    <div class="content-header">
        <h3 class="text-center"><strong>Novosti</strong></h3>
    </div>
    <a href="{{route('adminAddNews')}}" class="btn btn-success" style="margin-bottom: 15px;">Dodaj novu novost</a>

        <div class="row">
            @foreach($news as $new)
                <div class="col-sm-4 push">
                    <img src="{{asset('img/news/'. $new->img)}}" alt="image" class="img-responsive">
                    <div class="box-body">
                        <h4>{{$new->name}}</h4>
                        <p><?php echo $new->description ?></p>
                        <p>{{$new->created_at->format('d.m.Y H:i')}}</p>
                        <form action="{{route('adminDeleteNews', ['id' => $new->id])}}" method="post" class="btn-group">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-info" type="submit">Izbriši</button>
                        </form>
                        <a href="{{route('adminEditNews', ['id' => $new->id])}}" class="btn btn-danger">Izmjeni</a>
                    </div>
                </div>
            @endforeach
        </div>
</div>
@endsection