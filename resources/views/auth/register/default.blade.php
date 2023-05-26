@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-tight pt-4">
            <div class="text-center mb-4 display-6 auth-logo-container">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="card card-md">
                <div class="card-body pt-0">
                    @include(backpack_view('auth.register.inc.form'))
                </div>
            </div>
            <div class="text-center mt-4">
                <a tabindex="6" href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a>
            </div>
        </div>
    </div>
@endsection