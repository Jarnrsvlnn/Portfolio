@props(['bonito' => 'social'])

@if ($bonito == 'social')
    <div class="flex flex-row gap-2 items-center p-1 w-full cursor-pointer">
        {{ $slot }}
    </div>
@else
    <div class="flex flex-row gap-2 items-center p-1 w-full cursor-pointer">
        {{ $slot }}
    </div>
@endif
