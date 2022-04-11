<div class="inline-block relative" x-data="{ open: true}">

    <input class="bg-gray-200 text-gray-500 focus:outline-none placeholder-gray-500 px-2 py-2 rounded-full mr-4 w-56" 
    placeholder="Rechercher une mission..." type="text" name="" id="" wire:model="search"
    wire:keydown.arrow-down.prevent="incrementIndex" 
    wire:keydown.arrow-up.prevent="decrementIndex"
    wire:keydown.backspace="resetIndex"
    wire:keydown.enter="showJob"
    @click.away="open = false; @this.resetIndex();"
    @click=" open = true "
    >
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 absolute top-0 right-0 mr-6 mt-2" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>


    @if (strlen($search) > 2)
        <div class="absolute bg-gray-100 text-md border w-56 rounded" x-show="open">

            @if (count($jobs) > 0)
                @foreach ($jobs as $index => $job)
                    <p class="p-1 {{ $index === $selectorindex ? 'text-green-500' : '' }}">
                        {{ $job->title }}
                    </p>
                @endforeach
            @else
                    <span class="text-orange-500 p-1">Aucun résultat pour "{{ $search }}"</span>
            @endif
            
        </div>
    @endif

</div>

