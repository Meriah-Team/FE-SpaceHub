<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onboarding</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50 font-jakarta">
    <div x-data="{
        step: 'splash',
        images: {
            'splash': '{{ asset('images/spacehublogo.png') }}',
            'step1': '{{ asset('images/businesswoman in blue suit waving hello.png') }}',
            'step2': '{{ asset('images/confused male student avatar.png') }}',
            'step3': '{{ asset('images/young people looking at gadgets.png') }}',
        }
    }" x-init="setTimeout(() => step = 'step1', 1000)">

        <!-- Splash Screen -->
        <div x-show="step === 'splash'" x-transition:leave="transition ease-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 flex items-center justify-center bg-white z-50">
            <img :src="images.splash" alt="Logo" class="w-auto min-h-1/8 object-contain">
        </div>

        <!-- Step 1 -->
        <div x-show="step === 'step1'" x-transition:enter="transition ease-in duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            class="min-h-screen flex items-center justify-center p-4">
            <div class="flex flex-col items-center">
                <img :src="images.step1" alt="Step 1" class="w-64 h-64 mx-auto object-contain">
                <div class="bg-[var(--color-spacehub)] p-6 rounded-lg shadow-md w-80">
                    <h2 class="text-2xl font-bold mb-4 text-white">Welcome Spacers!</h2>
                    <p class="text-white mb-6">Find the best Co-Working Space experience in your city with just one tap.
                        Let's start now</p>
                    <button @click="step = 'step2'"
                        class="bg-[#594DA6] text-white px-6 py-3 rounded-lg font-medium hover:opacity-90 transition w-full hover:bg-white border border-[var(--color-spacehub)] hover:text-[var(--color-spacehub)]">
                        Get Started
                    </button>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div x-show="step === 'step2'" x-transition:enter="transition ease-in duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            class="min-h-screen flex items-center justify-center p-4">
            <div class="fles flex-col items-center space-y-8 ">
                <img :src="images.step2" alt="Step 2" class="w-64 h-64 mx-auto object-contain">
                <div class="bg-[var(--color-spacehub)] p-6 rounded-lg shadow-md w-80">
                    <h2 class="text-2xl font-bold mb-4 text-white">Looking for Workspace?</h2>
                    <p class="text-white mb-6">Find the best Co-Working Space around you in seconds, make an appointment, and enjoy the experience.</p>
                    <button @click="step = 'step3'"
                        class="bg-[#594DA6] text-white px-6 py-3 rounded-lg font-medium transition hover:bg-white border border-[var(--color-spacehub)] hover:text-[var(--color-spacehub)] inline-block w-full text-center">
                        Mulai
                    </button>
                </div>
            </div>
        </div>
        {{-- step3 --}}
        <div x-show="step === 'step3'" x-transition:enter="transition ease-in duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            class="min-h-screen flex items-center justify-center p-4">
            <div class="fles flex-col items-center space-y-8 ">
                <img :src="images.step3" alt="Step 3" class="w-64 h-64 mx-auto object-contain">
                <div class="bg-[var(--color-spacehub)] p-6 rounded-lg shadow-md w-80">
                    <h2 class="text-2xl font-bold mb-4 text-white">Everything in your hands!</h2>
                    <p class="text-white mb-6">With SpaceHub, find your comfort working space, see reviews, and make appointments easily. Achieve your productivity appearance!.</p>
                    <a href="/landing"
                        class="bg-[#594DA6] text-white px-6 py-3 rounded-lg font-medium transition hover:bg-white border border-[var(--color-spacehub)] hover:text-[var(--color-spacehub)] inline-block w-full text-center">
                        Mulai
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
