<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body class="{{ backpack_theme_config('classes.body') }}">

@basset(base_path('vendor/backpack/theme-tabler/resources/assets/js/theming.js'))

<div class="page">
    @includeWhen(config('backpack.theme-tabler.nav_position') === 'left', backpack_view('inc.sidebar'))

    <div class="page-wrapper">

        @include(backpack_view('inc.main_header'))

        <div class="page-body">
            <main class="@if(config('backpack.theme-tabler.nav_position') === 'left') main app-body flex-grow-1 px-2 @else container-xl @endif">

                @yield('before_breadcrumbs_widgets')

                @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))

                @yield('after_breadcrumbs_widgets')

                @yield('header')

                <div class="container-fluid animated fadeIn">

                    @yield('before_content_widgets')

                    @yield('content')

                    @yield('after_content_widgets')

                </div>
            </main>
        </div>

        <footer class="{{ config('backpack.base.footer_class') }}">
            @include(backpack_view('inc.footer'))
        </footer>
    </div>
</div>

@yield('before_scripts')
@stack('before_scripts')

@include(backpack_view('inc.scripts'))

@yield('after_scripts')
@stack('after_scripts')
</body>
</html>