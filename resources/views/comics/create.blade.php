@extends('layouts.app')
@section('page-title')
    CREA NUOVO COMIC
@endsection

@section('form')
    <div class="container py-5 ">
        {{-- validation --}}
        @include('shared.errors')
        {{-- //validation --}}
        <h2 class="py-4">Inserisci nuovo Comic</h2>
        {{-- creo form metodo POST che vai in comics.store --}}
        <form action="{{ route('comics.store') }}" method="POST">
            {{-- @csrf è il token che autentica la richiesta del form --}}
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome comic:</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                {{-- messaggio validation di default visualizzato campo per campo in questo caso inserito per validare il titolo --}}
                @foreach ($errors->get('title') as $message)
                    {{ $message }}
                @endforeach
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione:</label>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo:</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie:</label>
                <input type="text" class="form-control" name="series">
            </div>
            <button type="submit" class="btn btn-primary">Crea comic</button>
        </form>
    </div>
@endsection
