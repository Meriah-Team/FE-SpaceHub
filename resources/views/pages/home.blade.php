@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Navbar (mobile only(?))--}}
    @include('components.partials.mobile-top-nav')


    {{-- content body --}}
    <div>
        <!-- Your content here -->
    </div>

    {{-- Bottom Navigation Bar (mobile only) --}}
    @include('components.partials.mobile-button-nav')
@endsection
