<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
    <style>
        footer {
            width: 100%;
            position: fixed;
            bottom: 0;
            background-color: transparent !important;
            border: none !important;
        }
        .switch-mode {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 999;
        }
    </style>
</head>

<body class="{{ backpack_theme_config('classes.body') }} @if(backpack_theme_config('auth_layout') === 'cover') d-flex flex-column theme-light @endif">

@include(backpack_view('layouts.partials.light_dark_mode_logic'))

@if(backpack_theme_config('options.showColorModeSwitcher'))
    <div class="switch-mode p-3">
        @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
    </div>
@endif

@yield('content')

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.footer'))

@include(backpack_view('inc.scripts'))
@include(backpack_view('inc.theme_scripts'))

@yield('after_scripts')
@stack('after_scripts')
</body>
</html>