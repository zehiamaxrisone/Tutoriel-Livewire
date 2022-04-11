@extends('layouts.app')

@section('content')
    
    <h2 class="text-3xl text-green-500 mb-3">{{ $job->title }}</h2>

    <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md border-2 border-gray-300 rounded">
        <h2 class="text-xl font-bold text-green-800">
            {{ $job->title }}
        </h2>
        <p class="text-md text-gray-800">{{ $job->description }}</p>
        <span class="text-sm text-gray-500">{{ number_format($job->price, '2', ',', ' ') }} $</span>
    </div>

@endsection