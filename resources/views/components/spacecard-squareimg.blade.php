@props([
    'title' => '',    
    'address' => '',  
    'rating' => '',   
    'image' => ''     
])

<div class="grid grid-cols-[100px_1fr] gap-2 min-h-0 w-full">
    {{-- gambar kiri --}}
    <div class="aspect-square rounded-lg overflow-hidden">
        <img class="w-full h-full object-cover rounded-lg"
            src="{{ $image }}" alt="{{ $title }}">
    </div>
    {{-- details kanan --}}
    <div class="flex flex-col justify-start gap-2 text-left min-w-0">
        <h1 class="font-semibold text-gray-800 text-md truncate">{{ $title }}</h1>
        <div class="flex items-center text-gray-500 text-sm min-w-0">
            <x-svg.location-svg class="text-gray-500 h-4 w-4 mr-1 flex-shrink-0" />
            <span class="truncate">{{ $address }}</span>
        </div>
        <div class="flex items-center text-gray-500 text-sm">
            <x-svg.star-svg class="text-gray-500 h-4 w-4 mr-1 flex-shrink-0" />
            <span>{{ $rating }}</span>
        </div>
    </div>
</div>