<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        @livewireStyles

        <title>Upwork</title>
            
    </head>

    <body>
      <div class="container mx-auto px-4">
        @include('partials.navbar')
        @yield('content')
      </div>

      @livewireScripts
    </body>
</html>