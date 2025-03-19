@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div x-data="{
        email: '',
        password: '',
        isValidEmail: false,
        isValidPassword: false,
        validateEmail() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isValidEmail = emailRegex.test(this.email);
        },
        validatePassword(){
            this.isValidPassword = this.password.length >= 8;
        }
    }" class="min-h-screen flex items-center justify-center bg-gray-100 p-4">

        {{-- Login card --}}
        <div class="bg-[var(--color-spacehub-dark)] rounded-3xl shadow-lg p-8 text-white w-80 opacity-0 transition-opacity duration-500"
            :class="{ 'opacity-100': true }">

            {{-- step 1 pilih login via gugel atau anu --}}
            <div class="transition-all duration-300">
                {{--  Heading  --}}
                <h1 class="text-2xl font-bold mb-1">Sign In</h1>
                {{--  Google  --}}
                {{-- TO DO: sambungin sama google --}}
                <p class="text-sm text-gray-300 mb-4">Sign in with Google account</p>
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

                {{--  Email + password form  --}}
                <div class="mb-4">
                    <form action="{{ route('login') }}" method="POST" id="authenticate">
                        @csrf
                        {{-- email --}}
                        <div class="mb-2">
                            <label for="email" class="block text-sm mb-1 font-jakarta">Email</label>
                            <input type="email" x-model="email" @input="validateEmail" name="email" id="email"
                                class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                                placeholder="Your email address" required>
                        </div>
                        {{-- password --}}
                        <div class="mb-2">
                            <label for="password" class="block text-sm mb-1 font-jakarta">Password</label>
                            <input type="password" 
                                   x-model="password" 
                                   name="password" 
                                   id="password" 
                                   @input="validatePassword"
                                   class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                                   placeholder="••••••••" 
                                   required>
                            <p x-show="password.length > 0 && !isValidPassword" 
                               class="text-red-400 text-sm mt-1">
                                Password must be at least 8 characters long
                            </p>
                        </div>

                        <!-- sign in button -->
                        <button type="submit" 
                                :disabled="!isValidEmail || !isValidPassword"
                                class="w-full bg-[var(--color-spacehub-light)] hover:bg-[var(--color-spacehub)] text-white font-medium py-2 rounded-lg mb-4 transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                            Sign In
                        </button>
                    </form>
                </div>
                {{-- tampilin error kalau ada --}}
                {{-- TO DO: ambil error dari backend --}}
                @if ($errors->any() || session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        @if (session('error'))
                            {{ session('error') }}
                        @else
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif





                {{-- <!-- reCAPTCHA notice -->
                <p class="text-xs text-gray-300">
                    This site is protected by reCAPTCHA and the Google <a href="#" class="underline">Privacy
                        Policy</a>.
                </p> --}}
            </div>
        </div>
    </div>
@endsection
