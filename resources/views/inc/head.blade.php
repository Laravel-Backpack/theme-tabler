    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    @if (backpack_theme_config('meta_robots_content'))<meta name="robots" content="{{ backpack_theme_config('meta_robots_content', 'noindex, nofollow') }}"> @endif

    <meta name="csrf-token" content="{{ csrf_token() }}" /> {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
    <title>{{ isset($title) ? $title.' :: '.backpack_theme_config('project_name') : backpack_theme_config('project_name') }}</title>

    @yield('before_styles')
    @stack('before_styles')

        @include(backpack_view('inc.theme_styles'))

        @basset('https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css')
        @basset('https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/fonts/la-regular-400.woff2')
        @basset('https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/fonts/la-solid-900.woff2')
        @basset('https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/fonts/la-brands-400.woff2')

    @if (backpack_theme_config('styles') && count(backpack_theme_config('styles')))
        @foreach (backpack_theme_config('styles') as $path)
            @if(is_array($path))
                @basset(...$path)
            @else
                @basset($path)
            @endif
        @endforeach
    @endif

    @if (backpack_theme_config('mix_styles') && count(backpack_theme_config('mix_styles')))
        @foreach (backpack_theme_config('mix_styles') as $path => $manifest)
        <link rel="stylesheet" type="text/css" href="{{ mix($path, $manifest) }}">
        @endforeach
    @endif

    @if (backpack_theme_config('vite_styles') && count(backpack_theme_config('vite_styles')))
        @vite(backpack_theme_config('vite_styles'))
    @endif

    @yield('after_styles')
    @stack('after_styles')

    {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
