<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="o-auto {{ backpack_theme_config('classes.body') }} @if(backpack_theme_config('layout_login') === 'cover') d-flex flex-column theme-light @endif">

@include(backpack_view('layouts.partials.light-dark-mode'))

@yield('content')

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))

@yield('after_scripts')
@stack('after_scripts')
</body>
</html>
