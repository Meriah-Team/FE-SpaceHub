@props([
    'title' => '',    // Default empty string
    'address' => '',  // Default empty string
    'image' => ''     // Default empty string
])

<div class="h-auto min-w-[95%] aspect-video relative bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition-transform duration-500">
    <img src="{{ $image }}" class="w-full h-full object-cover" alt="{{ $title }}">
    <div class="absolute bottom-0 left-0 text-white p-4 w-full bg-gradient-to-b from-transparent to-black">
        <h1 class="font-jakarta font-bold">{{ $title }}</h1>
        <div class="flex items-center text-sm">
            <x-svg.location-svg class="text-white" />
            <span>{{ $address }}</span>
        </div>
    </div>
</div>
