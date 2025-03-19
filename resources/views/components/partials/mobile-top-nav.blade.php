<div class="fixed top-0 left-0 right-0 bg-white shadow-xs z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center border-b-2 border-gray-200">
        <!-- Location and User Info -->
        <div class="flex flex-col items-start">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[var(--color-spacehub)] mr-1"
                    fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 2C8.13401 2 5 5.13401 5 9C5 13.25 12 22 12 22C12 22 19 13.25 19 9C19 5.13401 15.866 2 12 2ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5Z" />
                </svg>
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
</div>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div class="h-16"></div>
