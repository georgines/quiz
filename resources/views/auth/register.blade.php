@extends('layouts.app')
@section('page-content')
    <div class="login">
        @component('components.preload')

        @endcomponent
        @component('components.register')
        @endcomponent
    </div>
@endsection

