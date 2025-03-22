<div class="grid grid-cols-[1fr_2fr] gap-2">
    {{-- gambar kiri --}}
    <div class="aspect-square rounded-lg h-25">
        <img class="w-full h-full object-cover rounded-lg"
            src="{{ asset('images/spaceplaceholder.png') }}" alt="">
    </div>
    {{-- details kanan --}}
    <div class="flex flex-col justify-start gap-3 text-left">
        <h1 class="font-semibold text-gray-800 text-md">Virtual Office (vOffice)</h1>
        <div class="flex items-center text-gray-500 text-sm">
            <x-svg.location-svg class="text-gray-500 h-4 w-4 mr-1" />
            <span class="truncate">Jl. Braga Nomor 109, Bandung</span>
        </div>
        <div class="flex items-center text-gray-500 text-sm">
            <x-svg.star-svg class="text-gray-500 h-4 w-4 mr-1"></x-svg.star-svg>
            <span>
                4.5
            </span>
        </div>
    </div>
</div>