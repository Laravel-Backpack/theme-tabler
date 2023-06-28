@if($auth ?? true)
    @if (backpack_auth()->guest())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('backpack.auth.login') }}">
                <i class="nav-icon la la-sign-in-alt d-block d-lg-none d-xl-block"></i> <span>{{ trans('backpack::base.login') }}</span>
            </a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="true">
                <span class="avatar avatar-sm rounded-circle me-2" style="background-image: url({{ app(Creativeorange\Gravatar\Gravatar::class)->get(backpack_user()->email, ['size' => 80]) }})"></span> {{ backpack_user()->name }}
            </a>
            <div class="dropdown-menu" data-bs-popper="static">
                <a class="dropdown-item" href="{{ route('backpack.account.info') }}">
                    <i class="nav-icon la la-lock d-block"></i>
                    {{ trans('backpack::base.my_account') }}
                </a>
                <a class="dropdown-item text-danger" href="{{ backpack_url('logout') }}">
                    <i class="nav-icon la la-sign-out-alt d-block"></i>
                    {{ trans('backpack::base.logout') }}
                </a>
            </div>
        </li>
    @endif
@endif

{{--
    IMPORTANT NOTE!
    @include(backpack_view('inc.topbar_left_content')) in no longer used!
--}}