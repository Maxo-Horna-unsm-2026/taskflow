@extends('layouts.base')
@section('body')
<div class="wrapper">
    @include('partials.sidebar')
    
    <main class="md:ml-64 transition-all duration-300 ease-in-out">
        @include('partials.navbar')
        <div class="relative">
            <div class="content mb-16 md:mb-0 p-6">
                @yield('content')
            </div>
        </div>
    </main>
</div>
@endsection