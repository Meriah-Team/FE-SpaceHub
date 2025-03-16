<!-- Mobile Navigation -->
<nav x-data="{ isOpen:false }" class="md:hidden bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <img src="{{ asset('images/spacehublogo.png') }}" alt="" class="h-8 w-auto"> <!-- Added sizing here -->
            </div>
            <div class="mobile-menu">
                <button id="mobile-menu-button" @click="isOpen = !isOpen" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    {{-- kalo nongol hamburger --}}
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    {{-- kalo kepencet silang --}}
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Dropdown -->
        <div x-show="isOpen" id="mobile-menu" class="md:hidden pb-3">
            <div class="flex flex-col space-y-2">
                <x-nav-link href="/landing" :active="request()->is('landing')">Beranda</x-nav-link>
                <x-nav-link href="#" :active="request()->is('/')">Tentang Kami</x-nav-link>
                <x-nav-link href="#" :active="request()->is('/')">Fitur</x-nav-link>
                <x-nav-link href="#" :active="request()->is('/')">Explore</x-nav-link>
                <x-nav-link href="#" :active="request()->is('/')">Kerjasama</x-nav-link>
        <hr class="my-2">
                <a href="#" class="border bg-[var(--color-spacehub)] text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-white hover:text-[var(--color-spacehub)] hover:border-[var(--color-spacehub)] text-center">Daftar</a>
            </div>
        </div>
    </div>
</nav>

<!-- Desktop Navigation -->
<nav class="hidden md:block bg-white ">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="#">
                        <img src="{{ asset('images/spacehublogo.png') }}" alt="logo spacehub" class="h-8 w-auto transition-transform hover:scale-105"> 
                    </a>
                </div>
                <div class="hidden md:block ml-10">
                    <div class="flex items-center space-x-4">
                        {{-- active request belom work idk --}}
                        <x-nav-link href="/landing" :active="request()->is('landing')">Beranda</x-nav-link>
                        <x-nav-link href="#" :active="request()->is('/')">Tentang Kami</x-nav-link>
                        <x-nav-link href="#" :active="request()->is('/')">Fitur</x-nav-link>
                        <x-nav-link href="#" :active="request()->is('/')">Explore</x-nav-link>
                        <x-nav-link href="#" :active="request()->is('/')">Kerjasama</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="flex items-center space-x-4">
                    <a href="#" class="bg-white text-red px-4 py-1 rounded-3xl text-sm font-medium border-1 border-black hover:bg-[var(--color-spacehub)] hover:text-white hover:border-0 transition-colors">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Add this script before closing body tag -->
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script> --}}
