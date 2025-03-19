@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div x-data="{
        email: '',
        isValidEmail: false,
        validateEmail() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            this.isValidEmail = emailRegex.test(this.email);
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
                    <form action="{{ url('/') }}" method="POST" id="loginform">
                        @csrf
                        {{-- email --}}
                        <div class="mb-2">
                            <label for="email" class="block text-sm mb-1 font-jakarta">Email</label>
                            <input type="text" class="">

                        </div>
                    </form>
                </div>
                {{-- tampilin error kalau ada --}}
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

                <!-- Continue button -->
                <button @click="if(isValidEmail)" :class="{ 'opacity-50 cursor-not-allowed': !isValidEmail }"
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
        </div>
    </div>
@endsection
