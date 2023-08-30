@extends(backpack_view('layouts.auth'))

@section('content')
    <div class="page page-center">
        <div class="container container-tight pt-4">
            <div class="text-center mb-4 display-6 auth-logo-container">
                {!! backpack_theme_config('project_logo') !!}
            </div>
            <div class="card card-md">
                <div class="card-body">
                {{ trans('backpack::base.verify_email.email_verification_required') }}

                @if (session('status') == 'verification-link-sent')
                    <div class="mt-4">
                    <div class="alert alert-important alert-success my-0" role="alert">
                      <div class="d-flex">
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                        </div>
                        <div>
                        {{ trans('backpack::base.verify_email.verification_link_sent') }}
                        </div>
                      </div>
                    </div>
                    </div>
                @endif
                </div>
                <div class="card-footer">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary float-start" tabindex="6">{{ trans('backpack::base.verify_email.resend_verification_link') }}</button>   
                </form>
                <form method="POST" action="{{ backpack_url('logout') }}">
                    @csrf
                    <button type="submit" class="btn button-secondary float-end" tabindex="7"><i class="la la-lock me-2"></i>{{ trans('backpack::base.logout') }}</button>   
                </form>     
                </div>       
           
        </div>
    </div>
        </div>
    </div>
@endsection