@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col h-screen">

        {{-- Navbar (mobile only(?)) --}}
        @include('components.partials.mobile-top-nav')


        {{-- content body --}}
        <main class="flex-grow overflow-auto">
            {{-- side scroll view buat rekomendasi workspace --}}
            <section class="flex space-x-4 overflow-x-auto bg-white h-60 p-4">
                @for ($i = 0; $i < 5; $i++)
                    {{-- card workspace --}}
                    <x-recommended-workspace>
                    </x-recommended-workspace>
                @endfor
            </section>
            <section>
                {{-- search bar --}}
            </section>
        </main>

        {{-- Bottom Navigation Bar (mobile only) --}}
        @include('components.partials.mobile-button-nav')
    </div>
@endsection
