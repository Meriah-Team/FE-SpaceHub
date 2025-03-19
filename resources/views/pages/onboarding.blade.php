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
        currentStep: 0,
        step: 'splash',
        steps: ['step1', 'step2', 'step3'],
        images: {
            'splash': '{{ asset('images/spacehublogo.png') }}',
            'step1': '{{ asset('images/businesswoman in blue suit waving hello.png') }}',
            'step2': '{{ asset('images/confused male student avatar.png') }}',
            'step3': '{{ asset('images/young people looking at gadgets.png') }}',
        },
        titles: {
            'step1': 'Welcome Spacers!',
            'step2': 'Looking for workspace?',
            'step3': 'Everything in your hands!'
        },
        paragraphs: {
            'step1': 'Find the best Co-Working Space experience in your city with just one tap. Let\'s start now!',
            'step2': 'Find the best Co-Working Space around you in seconds, make an appointment, and enjoy the experience.',
            'step3': 'With SpaceHub, find your comfort working space, see reviews, and make appointments easily. Achieve your productivity appearance!'
        },
        nextStep() {
            this.currentStep++;
            if (this.currentStep < this.steps.length) {
                this.step = this.steps[this.currentStep];
            }
        },
        prevStep() {
            this.currentStep--;
            if (this.currentStep >= 0) {
                this.step = this.steps[this.currentStep];
            } else {
                this.currentStep = 0;
            }
        }
    }" x-init="setTimeout(() => {
        step = steps[0];
        currentStep = 0;
    }, 300)">

        <!-- Splash Screen -->
        <div x-show="step === 'splash'" x-transition:leave="transition ease-out duration-500"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 flex items-center justify-center bg-white z-50">
            <img :src="images.splash" alt="Logo" class="w-auto min-h-1/8 object-contain">
        </div>

        <!-- Steps Content -->
        <div x-show="step !== 'splash'" x-transition:enter="transition ease-in duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            class="min-h-screen flex items-center justify-center p-4">
            <div class="flex flex-col items-center">
                <img :src="images[step]" alt="Steps" class="w-64 h-64 mx-auto object-contain"
                    x-transition:enter="transition ease-in-ot duration-300">
                <div class="bg-[var(--color-spacehub-dark)] p-6 rounded-lg shadow-md w-80">
                    <h2 class="text-2xl font-bold mb-4 text-white" x-text="titles[step]"></h2>
                    <p class="text-white mb-6" x-text="paragraphs[step]"></p>

                    <!-- Navigation buttons -->
                    <div class="flex gap-2">
                        <!-- Next/Final button -->
                        <button @click="currentStep < steps.length - 1 ? nextStep() : window.location.href='/register'"
                            class="flex-grow bg-[#594DA6] text-white px-6 py-3 rounded-lg font-medium hover:opacity-90 transition hover:bg-white border border-[var(--color-spacehub-dark)] hover:text-[var(--color-spacehub-dark)]"
                            x-text="currentStep < steps.length - 1 ? 'Next' : 'Get Started'">
                        </button>
                    </div>

                    <!-- Step indicators -->
                    <div class="flex justify-center mt-4 space-x-2">
                        <template x-for="(s, index) in steps" :key="index">
                            <div :class="{ 'bg-white': currentStep === index, 'bg-white/40': currentStep !== index }"
                                class="w-2 h-2 rounded-full"></div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        {{-- back to home --}}
        <button x-data="{ show: true }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" x-show="show" @click="window.location.href='/'"
            class="fixed bottom-5 right-5 bg-[var(--color-spacehub)] text-white p-2 rounded-full hover:bg-white hover:text-[var(--color-spacehub)] hover: border-2 border-[var(--color-spacehub)] transition-colors px-3 py-2 font-sans">
            Back to Home
        </button>
    </div>

</body>

</html>
