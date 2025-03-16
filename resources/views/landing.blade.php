<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpaceHub</title>
    {{-- css (tailwind) --}}
    @vite('resources/css/app.css')
    {{-- alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <x-navbar></x-navbar>
    {{-- Hero section Desktop Client --}}
    <div class="container mx-auto px-4 py-8 min-h-screen mt-20">
        <div class="flex flex-col md:flex-row items-center justify-between">
            {{-- Left side - Text content --}}
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="md:text-4xl font-bold text-[var(--color-spacehub)] mb-4">
                    Tingkatkan <br>
                    Produktivitas Bersama<br>
                    SpaceHub
                </h1>
                <p class="text-lg text-gray-600 mb-6">
                    Platform booking ruang meeting yang memudahkan anda untuk menemukan
                    dan memesan ruang meeting sesuai dengan kebutuhan bisnis anda.
                </p>
            </div>

            {{-- Right side - Image --}}
            <div class="md:w-1/2">
                <img src="{{ asset('images/heroimg.png') }}" alt="Hero Image" class="w-full h-auto rounded-lg">
            </div>
        </div>
    </div>

    {{-- Kenapa pilih Spacehub --}}
    <div class="min-h-screen">
        <div class="flex items-center justify-center bg-white mb-11">
            <div class="mb-3 md:mb-0 text-center">
                <h1 class="md:text-4xl font-bold mb-4 font-poppins ">
                    <span class="text-[var(--color-spacehub)]">Fleksibilitas dan</span>
                    <span class="text-yellow-500">Kemudahan</span>
                </h1>
            </div>
        </div>    
        {{--  3 alasan --}}
        <div class="flex flex-col md:flex-row md:space-x-6 space-y-4 md:space-y-0 mt-10 px-16">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-6 transition-transform hover:scale-105 w-full md:w-1/3">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Lokasi Strategis</h3>
                    <p class="text-gray-600">
                        Temukan ruang diskusi di lokasi yang mudah dijangkau dan strategis di berbagai kota.
                    </p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-6 transition-transform hover:scale-105 w-full md:w-1/3">
                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fleksibel 24/7</h3>
                    <p class="text-gray-600">
                        Akses ruang diskusi kapanpun kamu butuhkan, tersedia 24 jam setiap hari.
                    </p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-6 transition-transform hover:scale-105 w-full md:w-1/3">
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fasilitas Lengkap</h3>
                    <p class="text-gray-600">
                        Nikmati berbagai fasilitas pendukung seperti wifi cepat, proyektor, dan refreshment.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Kenali fitur --}}
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row items-center justify-between">
            {{-- Left side - Text content --}}
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="md:text-4xl font-bold text-black mb-4 font-inter">
                    Kenali fitur dalam <br>
                    platform kami
                </h1>
                <br>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <div class="bg-green-500 rounded-full p-1 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p>Pilihan worksace di berbagai tempat</p>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-green-500 rounded-full p-1 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p>Informasi detail workspace</p>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-green-500 rounded-full p-1 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p>Booking ruangan dan meja</p>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-green-500 rounded-full p-1 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p>Sesuaikan waktu dan jam boking</p>
                    </li>
                    <li class="flex items-center">
                        <div class="bg-green-500 rounded-full p-1 mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p>Pembayaran online praktis</p>
                    </li>
                </ul>
            </div>

            {{-- Right side - Image --}}
            <div class="md:w-1/2">
                <img src="{{ asset('images/fiturunggulan.png') }}" alt="fitur unggulan" class="w-full h-auto rounded-lg">
            </div>
        </div>
    </div>

    {{-- Jelajhi --}}
    <div class="text-center py-12">
        <h3 class="md:text-4xl font-bold mb-3 text-[var(--color-spacehub)]">Jelajahi Beragam Workspace</h3>
        <h3 class="md:text-4xl font-bold text-yellow-400">Mulai Sekarang</h3>
    </div>


    {{-- Top Workspaces --}}
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-18 bg-gradient-to-b from-[#CED2FF] to-transparent px-12 py-8 rounded-2xl">
            {{-- card rekomendasi --}}
            @for ($i=0; $i<6; $i++)
                <x-top-space-card :i="$i" />
            @endfor
        </div> 
        <div class="flex justify-end mt-8">
            <a href="#" class="bg-[var(--color-spacehub)] text-white px-6 py-3 rounded-lg font-medium hover:bg-white hover:text-[var(--color-spacehub)] border hover:border[var(--colo-spacehub)] transition-color duration-300 inline-flex items-center">
                Lebih Banyak
            </a>
        </div>
    </div>
        {{-- tombol jelajahi --}}

        {{-- Kemitraan --}}
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                {{-- Left side - gambar --}}
                <div class="md:w-1/2 md:mb-0 px-8">
                    <img src="{{ asset('images/kemitraan.png') }}" alt="Hero Image" class="w-full h-auto rounded-lg">
                </div>
                
                {{-- Right side - text --}}
                <div class="md:w-1/2 mb-8 ">
                    <div class="justify-start mb-8">
                        <p class="bg-[var(--color-spacehub)] text-white px-6 py-2 rounded-full font-medium border transition-color duration-300 inline-flex items-center">
                            Kemitraan
                        </p>
                        </div>

                    <h1 class="md:text-4xl font-bold text-[var(--color-spacehub)] mb-4">
                        Bergabung Bersama Kami!
                    </h1>
                    <p class="text-lg text-gray-600 mb-6">
                        lorem isum dolor sit amet
                    </p>
                </div>
            </div>
        </div>
    
        {{-- back to top --}}
        <button
            x-data="{ show:false }"
            x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })"
            x-show="show"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="fixed bottom-5 right-5 bg-[var(--color-spacehub)] text-white p-2 rounded-full hover:bg-white hover:text-[var(--color-spacehub)] hover: border-2 border-[var(--color-spacehub)] transition-colors px-3 py-2"
        >
            Kembali ke Atas
        </button>

        {{-- footer --}}
        <x-footer></x-footer>
</body>
</html>