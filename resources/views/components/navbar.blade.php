<!-- Mobile Navigation -->
<nav class="md:hidden bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <img src="{{ asset('images/spacehublogo.png') }}" alt="" class="h-8 w-auto"> <!-- Added sizing here -->
            </div>
            <div class="mobile-menu">
                <button id="mobile-menu-button" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden pb-3">
            <div class="flex flex-col space-y-2">
                <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Fitur</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Explore</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Kerjasama</a>
                <hr class="my-2">
                <a href="#" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-600 text-center">Sign Up</a>
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
                    <img src="{{ asset('images/spacehublogo.png') }}" alt="logo spacehub" class="h-8 w-auto"> 
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
                    <a href="#" class="bg-white text-red px-4 py-2 rounded-3xl text-sm font-medium border">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Add this script before closing body tag -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
