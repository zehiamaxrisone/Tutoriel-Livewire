@extends('layouts.app')


@section('content')
    
    <h2>
        Bienvenue Mr {{ auth()->user()->name }}
    </h2>

@endsection