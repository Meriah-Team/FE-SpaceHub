<div class="md:hidden fixed bottom-0 left-0 right-0 shadow-lg z-50">
    <div class="flex justify-around items-center h-16 mx-4 bg-white border-t-2 border-gray-200">
        <!-- Home -->
        <a href="{{ route('home') }}"
            class="flex flex-col items-center {{ request()->routeIs('home') ? 'text-[var(--color-spacehub-dark)]' : 'text-gray-500' }} hover:text-[var(--color-spacehub)]">
            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" stroke="none" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.5192 7.82274C2 8.77128 2 9.91549 2 12.2039V13.725C2 17.6258 2 19.5763 3.17157 20.7881C4.34315 22 6.22876 22 10 22H14C17.7712 22 19.6569 22 20.8284 20.7881C22 19.5763 22 17.6258 22 13.725V12.2039C22 9.91549 22 8.77128 21.4808 7.82274C20.9616 6.87421 20.0131 6.28551 18.116 5.10812L16.116 3.86687C14.1106 2.62229 13.1079 2 12 2C10.8921 2 9.88939 2.62229 7.88403 3.86687L5.88403 5.10813C3.98695 6.28551 3.0384 6.87421 2.5192 7.82274ZM9.44661 15.3975C9.11385 15.1508 8.64413 15.2206 8.39747 15.5534C8.15082 15.8862 8.22062 16.3559 8.55339 16.6025C9.5258 17.3233 10.715 17.75 12 17.75C13.285 17.75 14.4742 17.3233 15.4466 16.6025C15.7794 16.3559 15.8492 15.8862 15.6025 15.5534C15.3559 15.2206 14.8862 15.1508 14.5534 15.3975C13.825 15.9373 12.9459 16.25 12 16.25C11.0541 16.25 10.175 15.9373 9.44661 15.3975Z" />
            </svg>
            <span class="text-xs mt-1">Home</span>
        </a>

        <!-- Bookings -->
        <a href="{{ route('landing') }}" class="flex flex-col items-center {{ request()->routeIs('/') ? 'text-[var(--color-spacehub-dark)]' : 'text-gray-500' }} hover:text-[var(--color-spacehub)]">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                <path d="M7 4V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M17 4V2.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" />
                <path
                d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985"
                stroke="#none" fill="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <circle cx="16.5" cy="16.5" r="1.5" stroke="none" fill="#FFFFFF" stroke-width="5" />
            </svg>
            <span class="text-xs mt-1">Bookings</span>
        </a>

        <!-- Profile -->
        <a href="{{ route('landing') }}" class="flex flex-col items-center {{ request()->routeIs('/') ? 'text-[var(--color-spacehub-dark)]' : 'text-gray-500' }} hover:text-[var(--color-spacehub)]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span class="text-xs mt-1">Profile</span>
        </a>
    </div>
</div>