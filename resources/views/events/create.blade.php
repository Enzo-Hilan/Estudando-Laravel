@extends('layouts.main')

@section('title', 'Criar Evento')
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/events" method="POST">
            @csrf {{-- CSRF token for security --}}
            <div class="form-group">
                <label for="title">Evento: </label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Cidade: </label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?: </label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição: </label>
                <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>

@endsection