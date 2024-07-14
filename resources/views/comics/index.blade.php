@extends('layouts.app')
@section('page-title')
    COMICS
@endsection

@section('card-comic')
    <div class="container py-4">

        @foreach ($comics as $comic)
            {{-- vai a comic->id --}}
            <a href="{{ route('comics.show', $comic->id) }}">
                <div>Titolo: {{ $comic['title'] }}</div>
            </a>
            <hr>
        @endforeach
    </div>
@endsection
