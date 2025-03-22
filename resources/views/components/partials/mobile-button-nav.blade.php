{{-- spacer biar gak ada yg dibelakang nav --}}
<div class="h-20"></div>
<footer class="md:hidden fixed bottom-0 left-0 right-0 shadow-lg z-50 bg-white">
    <div class="flex justify-around items-center h-16 mx-4 bg-white border-t-2 border-gray-200">
        <!-- Home -->
        <a href="{{ route('home') }}"
            class="flex flex-col items-center {{ request()->routeIs('home') ? 'text-[var(--color-spacehub-dark)]' : 'text-gray-500' }} hover:text-[var(--color-spacehub)]">
            @include('components.svg.home-svg')
            <span class="text-xs mt-1">Home</span>
        </a>

        <!-- Bookings -->
        <a href="{{ route('landing') }}"
            class="flex flex-col items-center {{ request()->routeIs('/') ? 'text-[var(--color-spacehub-dark)]' : 'text-gray-500' }} hover:text-[var(--color-spacehub)]">
            @include('components.svg.calendar-svg')
            <span class="text-xs mt-1">Bookings</span>
        </a>

        <!-- Profile -->
        <a href="{{ route('landing') }}"
            class="flex flex-col items-center {{ request()->routeIs('/') ? 'text-[var(--color-spacehub-dark)]' : 'text-gray-500' }} hover:text-[var(--color-spacehub)]">
            @include('components.svg.profile-svg')
            <span class="text-xs mt-1">Profile</span>
        </a>
    </div>
</footer>
