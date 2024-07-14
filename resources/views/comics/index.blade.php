@extends('layouts.app')
@section('page-title')
    COMICS-INDEX
@endsection

@section('card-comic')
    <div class="container py-5">
        <ul class="list-unstyled d-flex flex-wrap justify-content-between gap-5">
            <li>

                @foreach ($comics as $comic)
                    {{-- vai a comic->id --}}
                    <a href="{{ route('comics.show', $comic->id) }}">

                        <img class="img-comic" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </a>
                @endforeach
            </li>
        </ul>
    </div>
@endsection
