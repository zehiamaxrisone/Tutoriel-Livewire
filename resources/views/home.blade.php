@extends('layouts.app')


@section('content')
    
    <h2>
        Bienvenue Mr {{ auth()->user()->name }}
    </h2>

    <h2>
        Vos dernières mission favories: <br>
        @foreach (auth()->user()->likes as $like)
            <span class="font-bold">
                {{ $like->title }}
            </span>
        @endforeach
    </h2>

@endsection