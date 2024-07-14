@extends('layouts.app')
@section('page-title')
    HOME
@endsection


@section('welcome')
    <div class="container py-3">
        <a href="{{ route('comics.create') }}">
            <div class="btn btn-primary">Crea nuovo comic</div>
        </a>
        <ul class="list-unstyled py-3">
            <li>
                @foreach ($comics as $comic)
                    <div>Titolo: {{ $comic['title'] }}</div>
                @endforeach
            </li>
        </ul>


    </div>
@endsection
