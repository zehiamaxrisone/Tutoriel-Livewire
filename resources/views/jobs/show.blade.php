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

    <section x-data="{open : false}">
        <button class="text-green-500" @click=" open= !open ">Soumettre une candidature</button>
        <form action="{{ route('proposals.store', $job) }}" class="" x-show="open" x-cloak method="post">
            @csrf
            <textarea name="content" id=""  rows="5" class="p-3 font-thin w-full max-w-lg"></textarea>
            <button type="submit" class="block bg-green-500 text-white px-3 py-2">Soumettre la letter de motivation</button>
        </form>
    </section>

@endsection