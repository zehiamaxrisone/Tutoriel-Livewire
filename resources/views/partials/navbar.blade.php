<header class="flex justify-between items-center py-5">

    <div>LOGO</div>

    <nav class="">
        @livewire('search')
        <a href="{{ route('job.index') }}" class="mr-5 hover:text-green-500">Nos Missions</a>
        @guest
            <a href="{{ route('login') }}" class="mr-5 hover:text-green-500">Se connecter</a>
            <a href="{{ route('register') }}" class="mr-5 hover:text-green-500">S'enregistrer</a>
        @else 
            <a href="{{ route('home') }}" class="mr-5 hover:text-green-500">Tableau de bord</a>
            {{-- Annuler le comportement pa defaut et en ajouter une personnalisé" --}}
            <a href="{{ route('logout') }}" class="mr-5 hover:text-green-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                Se deconnecter
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">@csrf</form>
        @endguest


    </nav>

</header>