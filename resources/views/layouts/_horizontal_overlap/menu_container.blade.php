@php
  $shouldApplyOverlapEffect = backpack_theme_config('layout') == 'horizontal_overlap';
@endphp

<header class="{{ backpack_theme_config('classes.menuHorizontalContainer') ?? 'navbar-expand-lg top' }}">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-print-none {{ backpack_theme_config('classes.menuHorizontalContent') ?? 'navbar navbar-expand-lg navbar-dark' }} {{ $shouldApplyOverlapEffect ? 'navbar-overlap' : '' }}">
            <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container-fluid' : 'container-xl' }}">
                <ul class="navbar-nav">
                    @unless(backpack_theme_config('options.doubleTopBarInHorizontalLayouts'))
                        <li class="nav-brand">
                            <a class="nav-link" href="{{ backpack_url('dashboard') }}">
                                {!! backpack_theme_config('project_logo') !!}
                            </a>
                        </li>
                    @endunless
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
                @unless(backpack_theme_config('options.doubleTopBarInHorizontalLayouts'))
                    @include(backpack_view('inc.menu'))
                @endunless
            </div>
        </div>
    </div>
</header>

<aside class="navbar navbar-expand-lg navbar-dark d-block d-lg-none">
    <div class="container-fluid">
        <ul class="nav navbar-nav d-flex flex-row align-items-center justify-content-between w-100">
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
        <div class="collapse navbar-collapse" id="mobile-menu">
            <ul class="navbar-nav pt-lg-3">
                @include(backpack_view('inc.sidebar_content'))
            </ul>
        </div>
    </div>
</aside>
