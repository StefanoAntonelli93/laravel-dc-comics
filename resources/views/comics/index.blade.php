@extends('layouts.app')
@section('page-title')
    COMICS-INDEX
@endsection

@section('card-comic')
    <div class="container py-5">
        <ul class="list-unstyled ">
            <li class="d-flex flex-wrap justify-content-between">

                @foreach ($comics as $comic)
                    {{-- vai a comic->id --}}
                    <div> <a href="{{ route('comics.show', $comic->id) }}">

                            <img class="img-comic py-1" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </a>
                        <div class="btn"><a href="{{ route('comics.edit', $comic->id) }}">modifica</a></div>

                    </div>
                @endforeach
            </li>
        </ul>
    </div>
@endsection
