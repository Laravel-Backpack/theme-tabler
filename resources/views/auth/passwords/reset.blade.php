@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4 display-6">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link disabled" data-bs-toggle="tab" aria-selected="true" role="tab">{{ trans('backpack::base.step') }} 1</div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">{{ trans('backpack::base.step') }} 2 — {{ trans('backpack::base.choose_new_password') }}</div>
                        </li>
                        <li class="nav-item ms-auto" role="presentation">
                            <a href="javascript:void(0);" onclick="colorMode.switch()" class="nav-link hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
                                <i class="la la-sun fs-2"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="colorMode.switch()" class="nav-link hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
                                <i class="la la-moon fs-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h3 class="mb-3">{{ trans('backpack::base.reset_password') }}</h3>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-home-7" role="tabpanel">
                            @if (session('status'))
                                <div class="alert alert-success mt-3">
                                    {{ session('status') }}
                                </div>
                            @else
                                <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('backpack.auth.password.reset') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="mb-3">
                                        <label class="form-label" for="email">{{ trans('backpack::base.email_address') }}</label>
                                        <input autofocus type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
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

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ trans('backpack::base.change_password') }}
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
