@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col h-screen">

        {{-- Navbar (mobile only(?)) --}}
        @include('components.partials.mobile-top-nav')
        <!-- Spacer to prevent content from hiding under fixed navbar -->
        <div class="h-44"></div>

        {{-- content body --}}
        <main class="flex-grow overflow-auto">
            {{-- side scroll view buat rekomendasi workspace --}}
            <section class="flex space-x-4 overflow-x-auto bg-white h-51 p-4">
                @for ($i = 0; $i < 5; $i++)
                    <x-cards.recommended-workspace title="Virtual Office (vOffice)" address="Jl. Braga Nomor 109, Bandung"
                        image="{{ asset('images/spaceplaceholder.png') }}">
                    </x-cards.recommended-workspace>
                @endfor
            </section>
            <section x-data="{ showFilter: false }">
                {{-- search bar --}}
                {{-- TO DO: implementasikan form buat filter dan search term sama benerin slider buat rating --}}
                <div class="flex items-center flex-row relative gap-2 px-5">
                    <input type="text"
                        class="w-full h-8 px-4 bg-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none text-xs rounded-sm"
                        placeholder="Search workspace" />
                        {{-- search button --}}
                    <a  @click="showFilter = !showFilter"
                        class="h-8 w-8 bg-[var(--color-spacehub-dark)] p-1 rounded-md flex items-center justify-center hover:bg-[var(--color-spacehub)]">
                        @include('components.svg.setting-svg')
                    </a>
                </div>
                {{-- filter popup --}}
                <div x-show="showFilter"
                x-transition
                class="fixed inset-0 z-90">
                    {{-- overlay gelap --}}
                    <div @click="showFilter = false" class="absolute inset-0 bg-black opacity-50"></div>
                    {{-- filter popup --}}
                    <div class="rounded-2xl absolute right-0 bottom-0 w-full h-120 bg-white p-4">
                        {{-- filter header --}}
                        <div class="flex justify-between items-center ">
                            <h1 class="font-semibold text-lg text-gray-800">Filter</h1>
                            <button @click="showFilter = false"
                                class="text-[var(--color-spacehub-dark)] hover:text-[var(--color-spacehub)]">Tutup</button>
                        </div>
                        {{-- filter body --}}
                        <div class="flex flex-col gap-4 mt-4">
                            {{-- filter by category --}}
                            <div>
                                <h1 class="font-semibold text-gray-800">Kategori Workspace</h1>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <x-ui.category-button
                                        name="Coffee Shop">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Coworking Space">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Private Office">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Meeting Room">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Creative Space">
                                    </x-ui.category-button>

                                </div>
                            </div>
                            <div>
                                <h1 class="font-semibold text-gray-800">Kategori Tempat</h1>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <x-ui.category-button
                                        name="Ruangan">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Minimal Order">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Jam">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Meja">
                                    </x-ui.category-button>
                                    <x-ui.category-button
                                        name="Perorangan">
                                    </x-ui.category-button>

                                </div>
                            </div>
                            <div>
                                <h1 class="font-semibold text-gray-800">Rating Co-Working Space</h1>
                                <div class="flex flex-col gap-2 mt-2">
                                    {{-- Rating Display --}}
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600" x-text="rating + ' Bintang'">0.5 Bintang</span>
                                    </div>
                                    {{-- Slider --}}
                                    <input 
                                        type="range" 
                                        min="0.5" 
                                        max="5" 
                                        step="0.5"
                                        x-model="rating"
                                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-[var(--color-spacehub-dark)]">
                                    {{-- Rating Scale --}}
                                    <div class="flex justify-between text-xs text-gray-400">
                                        <span>0.5</span>
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                            <button class="bg-[var(--color-spacehub-dark)] text-white rounded-lg py-2">
                                Terapkan 
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Jelajahi Workspace --}}
            <section>
                <div class="flex flex-col mx-4 my-3">
                    <h1 class="font-semibold text-gray-800 text-lg">Jelajahi Workspace</h1>
                    {{-- container buat cards buat Jelajahi workspace --}}
                    <div class="flex flex-grow flex-col gap-3 mt-2 py-3 px-3">

                        {{-- card jelajahi workspace --}}
                        @for ($i = 0; $i < 3; $i++)
                            <x-cards.spacecard-squareimg title="Virtual Office (vOffice)" address="Jl. Braga Nomor 109, Bandung"
                                rating="4.5" image="{{ asset('images/spaceplaceholder.png') }}">
                            </x-cards.spacecard-squareimg>
                        @endfor
                    </div>
                    {{-- tombol jelajahi --}}
                    <div class="flex justify-center items-center">
                        <a href="#"
                            class="text-[var(--color-spacehub-dark)] border-2 border-[var(--color-spacehub-dark)] px-6 py-2 rounded-lg font-semibold">Jelajahi</a>
                    </div>
                </div>
            </section>

            {{-- Paling rekomendasi --}}
            <section>
                <div class="flex flex-col mx-4 my-3">
                    <h1 class="font-semibold text-gray-800 text-lg">Paling rekomendasi</h1>
                    <div class="flex space-x-4 overflow-x-auto bg-white h-51 p-4">
                        @for ($i = 0; $i < 5; $i++)
                            {{-- card workspace --}}
                            <x-cards.recommended-workspace
                            title="Conclave Bandung"
                            address="Jl. A Yani no 404"
                            image="{{ asset('images/spaceplaceholder.png') }}">
                            </x-cards.recommended-workspace>
                        @endfor
                    </div>
                    <div class="flex flex-grow flex-col gap-3 mt-2 py-3 px-3">
                        @for ($i = 0; $i < 5; $i++)
                            <x-cards.spacecard-squareimg 
                            title="Virtual Office (vOffice)"
                            address="Jl. Braga Nomor 109, Bandung"
                            rating="4.5"
                            image="{{ asset('images/spaceplaceholder.png') }}">
                            </x-cards.spacecard-squareimg>
                        @endfor
                    </div>
                    {{-- tombol rekomendasi --}}
                    <div class="flex justify-center items-center">
                        <a href="#"
                            class="text-[var(--color-spacehub-dark)] border-2 border-[var(--color-spacehub-dark)] px-6 py-2 rounded-lg font-semibold">Rekomendasi</a>
                    </div>
                </div>
            </section>
        </main>

        {{-- Bottom Navigation Bar (mobile only) --}}
        @include('components.partials.mobile-button-nav')
    </div>

    {{-- popup filter --}}
    <div>

    </div>
@endsection
<section x-data="{ 
    showFilter: false,
    rating: 2.5,  {{-- default value --}}
    selectedCategories: [],
    toggleCategory(category) {
        console.log('Toggle category:', category); // Debug log
        if (this.selectedCategories.includes(category)) {
            this.selectedCategories = this.selectedCategories.filter(cat => cat !== category);
        } else {
            this.selectedCategories.push(category);
        }
        console.log('Selected categories:', this.selectedCategories); // Debug log
    }
}">
</section>
