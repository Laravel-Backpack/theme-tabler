@if (backpack_auth()->check())
    <aside class="{{ backpack_theme_config('classes.sidebar') ?? 'navbar navbar-vertical navbar-right navbar-expand-lg navbar-dark' }}">
        <div class="container-fluid">
            <ul class="nav navbar-nav d-flex flex-row align-items-center justify-content-between w-100 d-block d-lg-none">
                @include(backpack_view('layouts.partials.mobile_toggle_btn'), ['forceWhiteLabelText' => true])
                <div class="d-flex flex-row align-items-center">
                    @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
                    @include(backpack_view('inc.menu_user_dropdown'))
                </div>
            </ul>
            <h1 class="navbar-brand navbar-brand-autodark d-none d-lg-block align-self-center mb-3">
                <a class="h2 text-decoration-none mb-0" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                    {!! backpack_theme_config('project_logo') !!}
                </a>
            </h1>
            <div class="collapse navbar-collapse" id="mobile-menu">
                <ul class="navbar-nav pt-lg-3">
                    <li class="px-3 fw-bold">{{ ucfirst(strtolower(trans('backpack::base.administration'))) }}</li>
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </aside>
@endif
