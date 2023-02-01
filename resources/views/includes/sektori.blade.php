<div class="col-12 col-lg-2">
    <ul class="list-group sticky-top">
        <a href="{{route('rudarstvo')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('rudarstvo') ? 'harbi-active' : '' }}">Rudarstvo</li></a>
        <a href="{{route('tehnicko-tehnoloski')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('tehnicko-tehnoloski') ? 'harbi-active' : '' }}">Tehničko-tehnološki</li></a>
        <a href="{{route('agroharbi')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('agroharbi') ? 'harbi-active' : '' }}">Agroharbi</li></a>
        <a href="{{route('farmacija')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('farmacija') ? 'harbi-active' : '' }}">Farmacija</li></a>
        <a href="{{route('harbilab')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('harbilab') ? 'harbi-active' : '' }}">Harbilab</li></a>
        <a href="{{route('proizvodnja')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('proizvodnja') ? 'harbi-active' : '' }}">Proizvodnja</li></a>
        <a href="{{route('gradjevina')}}" class="text-decoration-none"><li class="list-group-item {{ Route::is('gradjevina') ? 'harbi-active' : '' }}">Građevina</li></a>
    </ul>
</div>