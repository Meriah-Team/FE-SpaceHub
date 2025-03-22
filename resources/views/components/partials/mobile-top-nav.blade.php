<header class="md:hidden fixed top-0 left-0 right-0 bg-white shadow-xs z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center border-b-2 border-gray-200">
        <!-- Location and User Info -->
        <div class="flex flex-col items-start">
            <div class="flex items-center">
                <x-svg.location-svg class="text-[var(--color-spacehub)]"></x-svg.location-svg>
                {{-- TO DO: pake kota dari lokasi --}}
                <span class="text-gray-700">Yogyakarta</span>
            </div>
            {{-- TO Do: pake nama sesuai username --}}
            <span class="text-lg font-semibold text-gray-800">Joe Samanta</span>
        </div>

        <!-- Profile Picture -->
        <div class="flex items-center">
            <img src="{{ asset('images/default-avatar.png') }}" alt="Profile Picture"
                class="h-10 w-10 rounded-full object-cover border-2 border-gray-200">
        </div>
    </div>
</header>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div class="h-20"></div>
