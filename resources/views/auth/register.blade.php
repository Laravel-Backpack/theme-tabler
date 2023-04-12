@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4 display-6">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="card p-4 mb-0">
                <div class="d-flex justify-content-end w-100">
                    <a href="javascript:void(0);" onclick="colorMode.switch()" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
                        <i class="la la-sun fs-2"></i>
                    </a>
                    <a href="javascript:void(0);" onclick="colorMode.switch()" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
                        <i class="la la-moon fs-2"></i>
                    </a>
                </div>
                <div class="card-body pt-0">
                    <h2 class="card-title text-center mb-4">{{ trans('backpack::base.register') }}</h2>
                    <form role="form" method="POST" action="{{ route('backpack.auth.register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">{{ trans('backpack::base.name') }}</label>
                            <input autofocus type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="{{ backpack_authentication_column() }}">{{ config('backpack.base.authentication_column_name') }}</label>
                            <input type="{{ backpack_authentication_column()==backpack_email_column()?'email':'text'}}" class="form-control {{ $errors->has(backpack_authentication_column()) ? 'is-invalid' : '' }}" name="{{ backpack_authentication_column() }}" id="{{ backpack_authentication_column() }}" value="{{ old(backpack_authentication_column()) }}">
                            @if ($errors->has(backpack_authentication_column()))
                                <div class="invalid-feedback">{{ $errors->first(backpack_authentication_column()) }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">{{ trans('backpack::base.password') }}</label>
                            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" value="">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">{{ trans('backpack::base.confirm_password') }}</label>
                            <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" value="">
                            @if ($errors->has('password_confirmation'))
                                <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>

                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ trans('backpack::base.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (backpack_users_have_email() && backpack_email_column() == 'email' && config('backpack.base.setup_password_recovery_routes', true))
                <div class="text-center mt-2"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
            @endif
            <div class="text-center"><a href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a></div>
        </div>
    </div>
@endsection
