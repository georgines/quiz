@extends('layouts.app')
@section('page-content')
    <main class="main">

        @component('components.preload')

        @endcomponent

        @component('components.header')

        @endcomponent

        @component('components.sidebar')

        @endcomponent

        <section class="content">
            @component('components.content-title')
                @slot('title')
                    @yield('page-name')
                @endslot
                @yield('page-message')
            @endcomponent

            @yield('page-content')

            @component('components.footer')
            @endcomponent

        </section>
    </main>
@endsection
