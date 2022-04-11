@extends('layouts.app')

@section('content')
    
    <h2 class="text-3xl text-green-500 mb-3">Nos dernières Missions</h2>

    @foreach ($jobs as $job)
        @livewire('job', ['job' => $job])
    @endforeach

@endsection