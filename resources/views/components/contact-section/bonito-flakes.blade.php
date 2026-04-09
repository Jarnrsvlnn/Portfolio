@props([
    'bonito' => 'social',
    'link'
    ])

@if ($bonito == 'social')
    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer" class="flex flex-col space-y-0.5 justify-center w-full cursor-pointer transition-all duration-50 ease-out hover:border-3 hover:border-green-400 rounded-sm">
        {{ $slot }}
    </a>
@else
    <div id="open-dialog" class="flex flex-col space-y-0.5 justify-center w-full cursor-pointer p-1 transition-all duration-50 ease-out hover:border-3 hover:border-green-400 rounded-sm">
        {{ $slot }}
    </div>
@endif
