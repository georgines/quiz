@extends('layouts.app')
@section('page-content')
    <div class="login">

        @component('components.preload')

        @endcomponent
        @component('components.reset-password')
            @slot('token')
                {{$token}}
            @endslot
        @endcomponent



    </div>
@endsection