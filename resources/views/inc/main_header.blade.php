<div class="@if(!\Backpack\ThemeTabler\ThemeOptions::isHorizontalOverlapLayout() && \Backpack\ThemeTabler\ThemeOptions::shouldUseStaticHeader()) sticky-top @endif d-none d-lg-block">
    <header class="d-print-none {{ config('backpack.theme-tabler.classes.topHeader') }}">
        <div class="{{ \Backpack\ThemeTabler\ThemeOptions::shouldUseFluidContainers() ? 'container-fluid' : 'container-xl' }}">
            <div class="navbar-nav {{ \Backpack\ThemeTabler\ThemeOptions::isHorizontalLayout() ? 'flex-row order-md-last' : 'w-100 justify-content-end' }}">
                @include(backpack_view('inc.menu'))
            </div>
            @if(\Backpack\ThemeTabler\ThemeOptions::isHorizontalLayout())
                <a class="h2 text-decoration-none" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                    {!! backpack_theme_config('project_logo') !!}
                </a>
            @endif
        </div>
    </header>
    @includeWhen(\Backpack\ThemeTabler\ThemeOptions::isHorizontalLayout(), backpack_view('inc.menu-horizontal'))
</div>
