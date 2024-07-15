@extends('layouts.app')
@section('page-title')
    MODIFICA COMIC
@endsection

@section('form')
    <div class="container py-5 ">
        <h2>Modifica un Comic</h2>
        {{-- creo form metodo POST che vai in comics.update --}}
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            {{-- @csrf è il token che autentica la richiesta del form --}}
            @csrf
            {{-- per edit si aggiunge metodo PUT o PATCH --}}
            @method('PUT')
            {{-- importo i vecchi dati che voglio modificare --}}
            <div class="mb-3">
                <label class="form-label">Nome comic:</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione:</label>
                <textarea rows="10" cols="50" type="text" class="form-control" name="description" ">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo:</label>
                <input type="number" class="form-control" name="price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie:</label>
                <input type="text" class="form-control" name="series" value="{{ old('series', $comic->series) }}">
            </div>
            <button type="submit" class="btn btn-primary">Crea comic</button>
        </form>
    </div>
@endsection
