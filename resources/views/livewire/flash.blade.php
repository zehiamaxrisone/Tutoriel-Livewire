<div x-data="{open : false}" @flash-message.window="open = true; setTimeout(() => open = false, 7000);">
    <div x-show="open" x-cloak class="rounded {{ $type ? $colors[$type] : 'bg-red-200 text-red-700 border-red-700' }} px-1 py-3">
        {{ $message }}
    </div>
</div>
