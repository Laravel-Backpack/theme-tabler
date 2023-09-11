<h2 class="card-title text-center my-4">{{ trans('backpack::base.register') }}</h2>
<form role="form" method="POST" action="{{ route('backpack.auth.register') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="name">{{ trans('backpack::base.name') }}</label>
        <input autofocus tabindex="1" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label" for="{{ backpack_authentication_column() }}">{{ trans('backpack::base.'.strtolower(config('backpack.base.authentication_column_name'))) }}</label>
        <input tabindex="2" type="{{ backpack_authentication_column()==backpack_email_column()?'email':'text'}}" class="form-control {{ $errors->has(backpack_authentication_column()) ? 'is-invalid' : '' }}" name="{{ backpack_authentication_column() }}" id="{{ backpack_authentication_column() }}" value="{{ old(backpack_authentication_column()) }}">
        @if ($errors->has(backpack_authentication_column()))
            <div class="invalid-feedback">{{ $errors->first(backpack_authentication_column()) }}</div>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label" for="password">{{ trans('backpack::base.password') }}</label>
        <input tabindex="3" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" value="">
        @if ($errors->has('password'))
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
        @endif
    </div>

    <div class="mb-4">
        <label class="form-label" for="password_confirmation">{{ trans('backpack::base.confirm_password') }}</label>
        <input tabindex="4" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" value="">
        @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
        @endif
    </div>

    <div class="form-group">
        <div>
            <button tabindex="5" type="submit" class="btn btn-primary w-100">
                {{ trans('backpack::base.register') }}
            </button>
        </div>
    </div>
</form>