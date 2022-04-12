<div>
    <div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md border-2 border-gray-300 rounded">
        <div class="flex justify-between">
            <h2 class="text-xl font-bold text-green-800">
                {{ $job->title }}
            </h2>
            <button class="focus:outline-none text-green-800 h-6 w-6 "
            wire:click='addLike'
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="{{ $job->isLikes() ? 'green' : 'none' }}" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
        </div>
        <p class="text-md text-gray-800">{{ $job->description }}</p>
        <div class="flex items-center">
            <span class="h-2 w-2 bg-green-300 rounded-full mr-1"></span>
            <a href="{{ route('job.show', $job->id) }}">Consulter la mission</a>
        </div>
        <span class="text-sm text-gray-500">{{ number_format($job->price, '2', ',', ' ') }} $</span>
    </div>
</div>
