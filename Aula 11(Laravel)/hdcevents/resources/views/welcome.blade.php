
    @extends('layouts.main')

    @section('title', 'Início')

    @section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="https://cdn.cdnlogo.com/logos/l/57/laravel.svg" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">11/06/2022</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

@endsection