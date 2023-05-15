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
        <a href="javascript:void(0);" onclick="colorMode.switch()" class="hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
            <i class="la la-sun fs-2"></i>
        </a>
        <a href="javascript:void(0);" onclick="colorMode.switch()" class="hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
            <i class="la la-moon fs-2"></i>
        </a>
    </div>
@endif

@yield('content')

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.footer'))

@include('crud::inc.scripts')
@include(backpack_view('inc.theme_scripts'))

@yield('after_scripts')
@stack('after_scripts')
</body>
</html>