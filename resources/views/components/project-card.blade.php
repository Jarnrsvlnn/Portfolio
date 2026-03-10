<div {{ $attributes->merge(['class' => 'bg-cover bg-no-repeat bg-center w-full h-65 md:h-100 rounded-xl p-4 flex flex-col relative overflow-hidden']) }}>
    <!-- Black fade overlay on top/sides -->
    <div class="absolute inset-0 bg-linear-to-b from-black/30 via-transparent to-transparent pointer-events-none"></div>
    <!-- Black fade left -->
    <div class="absolute inset-0 bg-linear-to-r from-black/50 via-transparent to-transparent pointer-events-none"></div>
    <!-- Black fade right -->
    <div class="absolute inset-0 bg-linear-to-l from-black/50 via-transparent to-transparent pointer-events-none"></div>
    <!-- White fade on bottom -->
    <div class="absolute inset-x-0 bottom-0 h-40 bg-linear-to-t from-white/20 via-white/5 to-transparent pointer-events-none"></div>
    {{ $slot }}
</div>