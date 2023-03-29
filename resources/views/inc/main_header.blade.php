<div class="@if(config('backpack.theme-tabler.layout.menu') !== 'horizontal-overlap' && config('backpack.theme-tabler.layout.use-sticky-header')) sticky-top @endif d-none d-lg-block">
    <header class="d-print-none {{ config('backpack.theme-tabler.classes.top-header') }}">
        <div class="{{ config('backpack.theme-tabler.layout.use-fluid-containers') ? 'container-fluid' : 'container-xl' }}">
            <div class="navbar-nav {{ config('backpack.theme-tabler.layout.menu') === 'horizontal' || config('backpack.theme-tabler.layout.menu') === 'horizontal-overlap' ? 'flex-row order-md-last' : 'w-100 justify-content-end' }}">
                @include(backpack_view('inc.menu'))
            </div>
            @if(config('backpack.theme-tabler.layout.menu') === 'horizontal' || config('backpack.theme-tabler.layout.menu') === 'horizontal-overlap')
                <a class="h2 text-decoration-none" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                    {!! backpack_theme_config('project_logo') !!}
                </a>
            @endif
        </div>
    </header>
    @includeWhen(config('backpack.theme-tabler.layout.menu') === 'horizontal' || config('backpack.theme-tabler.layout.menu') === 'horizontal-overlap', backpack_view('inc.menu-horizontal'))
</div>
