@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4 display-6">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="card card-md">
                <div class="card-body pt-0">
                    @include(backpack_view('auth.register.inc.form'))
                </div>
            </div>
            @if (backpack_users_have_email() && backpack_email_column() == 'email' && config('backpack.base.setup_password_recovery_routes', true))
                <div class="text-center mt-3"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
            @endif
            <div class="text-center">
                <a href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a>
            </div>
        </div>
    </div>
@endsection