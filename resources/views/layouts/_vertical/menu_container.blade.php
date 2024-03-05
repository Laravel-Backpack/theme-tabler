@if (backpack_auth()->check())
    <aside data-menu-theme={{ $theme ?? 'system' }} class="{{ backpack_theme_config('classes.sidebar') ?? 'navbar navbar-vertical '.(($right ?? false) ? 'navbar-right' : '').' navbar-expand-lg navbar-'.($theme ?? 'light') }} @if(backpack_theme_config('options.sidebarFixed')) navbar-fixed @endif">
        <div class="container-fluid">
            <ul class="nav navbar-nav d-flex flex-row align-items-center justify-content-between w-100 d-block d-lg-none">
                @include(backpack_view('layouts.partials.mobile_toggle_btn'), ['forceWhiteLabelText' => true])
                <div class="d-flex flex-row align-items-center">
                    @include(backpack_view('inc.topbar_left_content'))
                    <li class="nav-item me-2">
                        @includeWhen(backpack_theme_config('options.showColorModeSwitcher'), backpack_view('layouts.partials.switch_theme'))
                    </li>
                    @include(backpack_view('inc.topbar_right_content'))
                    @include(backpack_view('inc.menu_user_dropdown'))
                </div>
            </ul>
            <h1 class="navbar-brand d-none d-lg-block align-self-center mb-3">
                <a class="h2 text-decoration-none mb-0" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                    {!! backpack_theme_config('project_logo') !!}
                </a>
            </h1>
            @includeWhen($shortcuts ?? true, backpack_view('layouts.partials.sidebar_shortcuts'))
            <div class="collapse navbar-collapse" id="mobile-menu">
                <ul class="navbar-nav pt-lg-3">
                    @include(backpack_view('layouts._vertical.sidebar_content_top'))
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </aside>
@endif
