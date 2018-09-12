@extends('layouts.app')
@section('page-content')
    <div class="login">
        @component('components.preload')

        @endcomponent
        @component('components.login')
        @endcomponent
    </div>
@endsection

