@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4 display-6 auth-logo-container">
                    {!! backpack_theme_config('project_logo') !!}
                </div>
                @include(backpack_view('auth.login.inc.form'))
                @if (config('backpack.base.registration_open'))
                    <div class="text-center text-muted mt-3">
                        <a tabindex="6" href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100" style="background-image: url(https://preview.tabler.io/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)"></div>
        </div>
    </div>
@endsection