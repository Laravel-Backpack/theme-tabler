@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4 display-6">
                    {!! backpack_theme_config('project_logo') !!}
                </div>
                <h2 class="h2 text-center mb-4">{{ trans('backpack::base.login') }}</h2>
                <form method="POST" action="{{ route('backpack.auth.login') }}" autocomplete="off" novalidate="">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>
                        <input type="text" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}" class="form-control {{ $errors->has($username) ? 'is-invalid' : '' }}">
                        @if ($errors->has($username))
                            <div class="invalid-feedback">{{ $errors->first($username) }}</div>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="password">
                            {{ trans('backpack::base.password') }}
                            @if (backpack_users_have_email())
                                <div class="form-label-description">
                                    <a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>
                                </div>
                            @endif
                        </label>
                        <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="">
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">{{ trans('backpack::base.remember_me') }}</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ trans('backpack::base.login') }}</button>
                    </div>
                </form>
                @if (config('backpack.base.registration_open'))
                    <div class="text-center text-muted mt-3">
                        <a href="{{ route('backpack.auth.register') }}" tabindex="-1">{{ trans('backpack::base.register') }}</a>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100" style="background-image: url(https://preview.tabler.io/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)"></div>
        </div>
    </div>
@endsection