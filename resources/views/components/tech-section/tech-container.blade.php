@props(['spacing' => 'gap-x-5'])

<div class="flex flex-row flex-wrap {{ $spacing }} gap-y-1 w-full">
    {{ $slot }}
</div>