<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50">
    {{-- pilihan mau sign up pake gugel apa daftar biasa --}}
    <div x-data="{
        isgoogle: false,
        currentStep: 'step1',
        email: '',
        isValidEmail: false,
        validateEmail() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isValidEmail = emailRegex.test(this.email);
        }
    }" class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
        <!-- Sign up card with purple background -->
        <div class="bg-[var(--color-spacehub-dark)] rounded-3xl shadow-lg p-8 text-white"
            :class="{ 'w-120': currentStep === 'step2', 'w-80': currentStep === 'step1' }">
            {{-- Step 1: Email Input --}}
            <div x-show="currentStep === 'step1'">
                {{--  Heading  --}}
                <h1 class="text-2xl font-bold mb-1">Sign Up</h1>
                {{--  Google  --}}
                <p class="text-sm text-gray-300 mb-4">Sign up with Google account</p>
                <button
                    class="w-full bg-white text-gray-700 py-3 px-4 rounded-lg mb-6 flex items-center justify-center font-medium hover:bg-gray-100">
                    <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" alt="Google logo"
                        class="w-5 h-5 mr-2">
                    <p class="font-bold">
                        Google
                    </p>
                </button>

                <!-- Divider -->
                <div class="flex items-center mb-6">
                    <div class="flex-grow h-px bg-gray-400"></div>
                    <p class="mx-4 text-sm text-gray-300">Or continue with email address</p>
                    <div class="flex-grow h-px bg-gray-400"></div>
                </div>

                <!-- Email form -->
                <div class="mb-4">
                    <label for="email" class="block text-sm mb-1">Email</label>
                    <div class="relative w-full">
                        <input type="email" id="email" placeholder="abcd@gmail.com"
                            x-model="email"
                            @input="validateEmail"
                            class="w-full px-4 py-3 pl-10 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 size-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" 
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    
                </div>

                <!-- Continue button -->
                <button
                    @click="if(isValidEmail) currentStep = 'step2'"
                    :class="{'opacity-50 cursor-not-allowed': !isValidEmail}"
                    class="w-full bg-[var(--color-spacehub-light)] hover:bg-[var(--color-spacehub)] text-white font-medium py-3 rounded-lg mb-4 transition duration-200">
                    Continue
                </button>

                <!-- Sign in link -->
                <p class="text-center text-sm mb-4">
                    Already have an account? <a href="#" class="font-medium">Sign In</a>
                </p>

                <!-- reCAPTCHA notice -->
                <p class="text-xs text-gray-300">
                    This site is protected by reCAPTCHA and the Google <a href="#" class="underline">Privacy
                        Policy</a>.
                </p>
            </div>

            {{-- Step 2: Account Creation --}}
            <div x-show="currentStep === 'step2'" x-cloak>
                <h1 class="text-2xl font-bold mb-4">Create an Account</h1>
                
                {{-- <!-- 
                    TODO: Replace this placeholder action with the actual registration route
                    Example: action="{{ route('register') }}"
                --> --}}
                <form method="POST" action="{{ url('/') }}" id="registerForm">
                    @csrf
                    <input type="hidden" name="email" x-model="email">
                    
                    {{--  Full Name  --}}
                    <div class="mb-1">
                        <label for="fullName" class="block text-sm mb-1 font-jakarta">Full Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="John Doe"
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{--  Birth Date  --}}
                    <div class="mb-1">
                        <label for="birthDate" class="block text-sm mb-1 font-jakarta text-gray-300">Birth Date</label>
                        <input type="date" id="birthDate" name="birthDate"
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{-- Phone Number  --}}
                    <div class="mb-1">
                        <label for="phoneNumber" class="block text-sm mb-1 font-jakarta">Phone Number</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="085123456789"
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{--  Password  --}}
                    <div class="mb-1">
                        <label for="password" class="block text-sm mb-1 font-jakarta">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{--  Confirm Password  --}}
                    <div class="mb-4">
                        <label for="confirmPassword" class="block text-sm mb-1 font-jakarta">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="password_confirmation" placeholder="••••••••"
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{--  Privacy Policy Checkbox  --}}
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="privacy_policy" class="form-checkbox h-4 w-4 text-[var(--color-spacehub)]">
                            <span class="ml-2 text-sm">I accept the <a href="#" class="underline">Privacy Policy</a></span>
                        </label>
                    </div>

                    {{--  Navigation Buttons  --}}
                    <div class="flex space-x-4">
                        <button type="button" @click="currentStep = 'step1'"
                            class="w-1/2 bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 rounded-lg transition duration-200">
                            Back
                        </button>
                        <button type="submit"
                            class="w-1/2 bg-[var(--color-spacehub-light)] hover:bg-[var(--color-spacehub)] text-white font-medium py-3 rounded-lg transition duration-200">
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- back to home --}}
    <button x-data="{ show: true }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" x-show="show"
        @click="window.location.href='/'"
        class="fixed bottom-5 right-5 bg-[var(--color-spacehub)] text-white p-2 rounded-full hover:bg-white hover:text-[var(--color-spacehub)] hover: border-2 border-[var(--color-spacehub)] transition-colors px-3 py-2">
        Back to Home
    </button>
</body>

</html>
