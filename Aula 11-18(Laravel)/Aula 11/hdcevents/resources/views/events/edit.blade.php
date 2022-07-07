@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input required type="file" id="image" name="image" accept="image/png, image/gif, image/jpeg" class="form-control-file">
            <img src="/img/events/{{$event->image}}" alt="" class="image-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input required type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="title">Data do Evento:</label>
            <input required type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input required type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1"{{$event->private ==1 ? "selected='selected'": ""}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Evento:</label>
        <textarea name="description" id="desription" class="form-control" placeholder="O que será o evento">{{$event->description}}</textarea>
        </div>

        <div require class="form-group">
            <label for="description">Adicionar itens de infraestrutura:</label>
            <div class="form-group">
                <input  type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input  type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input  type="checkbox" name="items[]" value="Cerveja Gratis"> Cerveja Grátis
            </div>
            <div class="form-group">
                <input  type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input  type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>

        <input required type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>



@endsection