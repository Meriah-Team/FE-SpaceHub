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
    <!-- Main container with full height and centered content -->
    <div 
    x-data="{
        
    }"
    class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
        <!-- Sign up card with purple background -->
        <div class="w-1/3 bg-[var(--color-spacehub-dark)] rounded-3xl shadow-lg p-8 text-white">
            <!-- Heading -->
            <h1 class="text-2xl font-bold mb-1">Sign Up</h1>
            <p class="text-sm text-gray-300 mb-4">Sign up with Google account</p>

            <!-- Google button -->
            <button
                class="w-full bg-white text-gray-700 py-3 px-4 rounded-lg mb-6 flex items-center justify-center font-medium hover:bg-gray-100">
                <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" alt="Google logo" class="w-5 h-5 mr-2">
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
                <div class="relative">
                    <input type="email" id="email" placeholder="abcd@gmail.com"
                        class="w-full px-4 py-3 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </input>
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    </div>
                </div>
            </div>

            <!-- Continue button -->
            <button
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
</body>

</html>
