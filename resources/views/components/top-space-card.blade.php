@props(['i'])
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative h-48">
        <img src="{{ asset('images/workspace1.jpg') }}" alt="Workspace {{ $i }}" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        {{-- tags --}}
        <div class="">
            <div class="inline-block bg-lime-300 rounded-lg text-white font-semibold text-sm px-2 py-1 ">
                <p>Tag 1</p>
            </div>
        </div>
        <div class="flex justify-between items-center">
            <span>
                <h4 class="text-l font-semibold text-neutral-900">Nama Workspace</h4>
            </span>
            <span class="text-neutral-600 font-bold">Rp 50.000/jam</span>
        </div>
        <div class="flex justify-between items-center">
            <span>
                <p class="text-gray-600 text-sm">Lokasi Workspace</p>
            </span>
            <span class="text-sm text-gray-500">/Ruangan</span>
        </div>
    </div>
</div> 