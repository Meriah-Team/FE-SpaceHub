@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - SpaceHub</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { 
            display: none !important; 
        }
    </style>
</head>
<body class="bg-gray-50">
    @yield('content')
    
    {{-- back to home button --}}
    <button x-data="{ show: true }" 
            x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" 
            x-show="show" 
            @click="window.location.href='/'"
            class="fixed bottom-5 right-5 bg-[var(--color-spacehub)] text-white p-2 rounded-full hover:bg-white hover:text-[var(--color-spacehub)] hover: border-2 border-[var(--color-spacehub)] transition-colors px-3 py-2">
        Back to Home
    </button>
</body>
</html>