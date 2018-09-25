@extends('layouts.app')
@section('page-styles')
    @yield('styles')
@endsection
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
                    @yield('title')
                @endslot
                @yield('message')
            @endcomponent

            @yield('content')

            @component('components.footer')
            @endcomponent

        </section>
    </main>
@endsection

@section('page-scripts')
    <script>
        $("#disparar").click(function () {
            $("#alvo").submit();
            console.log("teste");
        });
    </script>
    @yield('scripts')
@endsection
