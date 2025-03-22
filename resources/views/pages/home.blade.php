@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col h-screen">

        {{-- Navbar (mobile only(?)) --}}
        @include('components.partials.mobile-top-nav')


        {{-- content body --}}
        <main class="flex-grow overflow-auto">
            {{-- side scroll view buat rekomendasi workspace --}}
            <section class="flex space-x-4 overflow-x-auto bg-white h-51 p-4">
                @for ($i = 0; $i < 5; $i++)
                    {{-- card workspace --}}
                    <x-recommended-workspace>
                    </x-recommended-workspace>
                @endfor
            </section>
            <section>
                {{-- search bar --}}
                <div class="flex items-center flex-row relative gap-2 px-5">
                    <input type="text"
                        class="w-full h-8 px-4 bg-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none text-xs rounded-sm"
                        placeholder="Search workspace" />
                    <a
                        class="h-8 w-8 bg-[var(--color-spacehub-dark)] p-1 rounded-md flex items-center justify-center hover:bg-[var(--color-spacehub)]">
                        @include('components.svg.setting-svg')
                    </a>
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
                            <x-spacecard-squareimg>
                            </x-spacecard-squareimg>
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
                            <x-recommended-workspace>
                            </x-recommended-workspace>
                        @endfor
                    </div>
                    <div class="flex flex-grow flex-col gap-3 mt-2 py-3 px-3">
                        @for ($i = 0; $i < 5; $i++)
                            <x-spacecard-squareimg>
                            </x-spacecard-squareimg>
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
@endsection
