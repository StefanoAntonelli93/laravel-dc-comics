@extends('layouts.app')
@section('page-title')
    COMICS-INDEX
@endsection

@section('card-comic')
    <div class="container py-5">
        <ul class="list-unstyled d-flex flex-wrap justify-content-between ">


            @foreach ($comics as $comic)
                <li>
                    {{-- fare overlay per inserire sull immagini il tiutolo del comic --}}
                    <div>

                        {{-- vai a comic-info --}}
                        <a href="{{ route('comics.show', $comic->id) }}">

                            <img class="img-comic py-1" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </a>

                    </div>
                    {{-- MODIFICA --}}
                    <div class="btn btn-primary py-2"><a class="text-white"
                            href="{{ route('comics.edit', $comic->id) }}">modifica</a></div>
                    {{-- DELETE --}}
                    <form action="{{ route('comics.destroy', $comic->id) }}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary">cancella</button>
                    </form>
                </li>
            @endforeach

        </ul>
    </div>
@endsection
