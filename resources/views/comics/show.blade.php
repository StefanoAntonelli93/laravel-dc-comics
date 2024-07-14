@extends('layouts.app')
@section('page-title')
    COMICS-INFO
@endsection

@section('card-comic')
    <div class="container py-5 vh-100">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->price }} &euro;</p>
        <p>{{ $comic->description }}</p>
        <a href="{{ route('comics.index') }}">Torna ai comics</a>
    </div>
@endsection
