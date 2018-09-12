<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
{{ Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}
{{ Html::style('vendors/bower_components/animate.css/animate.min.css') }}
{{ Html::style('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}

<!-- page styles -->
@yield('page-styles')

<!-- App styles -->
    {{ Html::style('css/app.min.css') }}


</head>

<body data-ma-theme="green">


@yield('page-content')


@component('components.browsers')

@endcomponent

<!-- Javascript -->
<!-- Vendors -->
{{Html::script('vendors/bower_components/jquery/dist/jquery.min.js')}}

{{Html::script('vendors/bower_components/popper.js/dist/umd/popper.min.js')}}

{{Html::script('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}

{{Html::script('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}

{{Html::script('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}

<!-- page scripts -->
@yield('page-scripts')

<!-- App functions and actions -->
{{Html::script('js/app.min.js')}}

</body>
</html>