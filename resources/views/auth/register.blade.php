@extends('layouts.auth')

@section('title', 'Sign Up')

@section('content')
    <div x-data="{
        formData: {
            email: '',
            fullName: '',
            birthDate: '',
            phoneNumber: '',
            password: ''
        },
        isgoogle: false,
        currentStep: 'step1',
        isValidEmail: false,
        validateEmail() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isValidEmail = emailRegex.test(this.formData.email);
        }
    }" class="min-h-screen flex items-center justify-center bg-gray-100 p-4">

        {{-- Sign up card --}}
        <div class="bg-[var(--color-spacehub-dark)] rounded-3xl shadow-lg p-8 text-white opacity-0 transition-all duration-500"
            :class="{ 'w-120 opacity-100': currentStep === 'step2', 'w-80 opacity-100': currentStep === 'step1' }">

            {{-- Step 1: Email Input --}}
            <div x-show="currentStep === 'step1'" x-cloak class="transform transition-all duration-300 ease-in-out">
                {{--  Heading  --}}
                <h1 class="text-2xl font-bold mb-1">Sign Up</h1>
                {{--  Google  --}}
                {{-- TO DO: sambungin sama backend buat google gimana, apakah pakai controller atau gmn --}}
                <p class="text-sm text-gray-300 mb-4">Sign up with Google account</p>
                <button
                    class="w-full bg-white text-gray-700 py-2 px-4 rounded-lg mb-6 flex items-center justify-center font-medium hover:bg-gray-100">
                    <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" alt="Google logo" class="w-5 h-5 mr-2">
                    <p class="font-bold">
                        Google
                    </p>
                </button>

                <!-- Divider -->
                <div class="flex items-center mb-3">
                    <div class="flex-grow h-px bg-gray-400"></div>
                    <p class="mx-4 text-sm text-gray-300">Or continue with email address</p>
                    <div class="flex-grow h-px bg-gray-400"></div>
                </div>

                <!-- Email form -->
                <div class="mb-4">
                    <label for="email" class="block text-sm mb-1">Email</label>
                    <div class="relative w-full">
                        <input type="email" 
                               id="email" 
                               placeholder="abcd@gmail.com" 
                               x-model="formData.email"
                               @input="validateEmail()"
                               class="w-full px-4 py-2 pl-10 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 size-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                </div>

                <!-- Continue button -->
                <button @click="currentStep = 'step2'"
                    class="w-full bg-[var(--color-spacehub-light)] hover:bg-[var(--color-spacehub)] text-white font-medium py-2 rounded-lg mb-4 transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                    :disabled="!isValidEmail"
                    x-bind:class="{ 'cursor-not-allowed': !isValidEmail }">
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
            <div x-show="currentStep === 'step2'" x-cloak class="transform transition-all duration-300 ease-in-out">
                <h1 class="text-2xl font-bold mb-4">Create an Account</h1>

                {{-- <!-- 
                   TODO: Ubah url template jadi url endpoint api untuk register user, jangan lupa tambahkan alert pakai swal
                   ketika user berhasil register (kalau udah dapet success message dari backend)
                --> --}}
                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf
                    <input type="hidden" name="email" x-model="formData.email" required>

                    {{--  Full Name  --}}
                    <div class="mb-1">
                        <label for="fullName" class="block text-sm mb-1 font-jakarta">Full Name</label>
                        <input type="text" 
                               id="fullName" 
                               name="fullName" 
                               value="{{ old('fullName') }}"
                               placeholder="John Doe"
                               required
                               class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white @error('fullName') ring-2 ring-red-500 @enderror">
                        @error('fullName')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{--  Birth Date  --}}
                    <div class="mb-1">
                        <label for="birthDate" class="block text-sm mb-1 font-jakarta text-gray-300">Birth Date</label>
                        <input type="date" id="birthDate" name="birthDate" required
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{-- Phone Number  --}}
                    <div class="mb-1">
                        <label for="phoneNumber" class="block text-sm mb-1 font-jakarta">Phone Number</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="085123456789" required
                            class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{--  Password  --}}
                    <div class="mb-4">
                        <label for="password" class="block text-sm mb-1 font-jakarta">Password</label>
                        <input type="password" 
                               id="password" 
                               required
                               name="password" 
                               placeholder="••••••••"
                               class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white @error('password') ring-2 ring-red-500 @enderror">
                        @error('password')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{--  Password Confirmation  --}}
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm mb-1 font-jakarta">Confirm Password</label>
                        <input type="password" 
                               id="password_confirmation" 
                               name="password_confirmation" 
                               required
                               placeholder="••••••••"
                               class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>

                    {{--  Privacy Policy Checkbox  --}}
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="privacy_policy"
                                class="form-checkbox h-4 w-4 text-[var(--color-spacehub)]">
                            <span class="ml-2 text-sm">I accept the <a href="#" class="underline">Privacy
                                    Policy</a></span>
                        </label>
                    </div>
                    {{-- menampilkan error dari session  --}}
                    {{-- TO DO: buat session error untuk validasi input --}}
                    @if ($errors->any() || session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            @if (session('error'))
                                <p>{{ session('error') }}</p>
                            @else
                                <ul class="list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3"
                                @click="$el.parentElement.remove()">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    {{--  Navigation Buttons  --}}
                    <div class="flex space-x-4">
                        <button type="button" @click="currentStep = 'step1'"
                            class="w-1/2 bg-gray-500 hover:bg-gray-600 text-white font-medium py-3 rounded-lg transition duration-200">
                            Back
                        </button>
                        <button type="submit"
                            class="w-1/2 bg-[var(--color-spacehub-light)] hover:bg-[var(--color-spacehub)] text-white font-medium py-3 rounded-lg transition duration-200" >
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
