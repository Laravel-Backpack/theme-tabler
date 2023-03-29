<header class="{{ backpack_theme_config('classes.topbar') }}">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-print-none {{ backpack_theme_config('classes.menu-horizontal') }} @if(config('backpack.theme-tabler.layout.menu') === 'horizontal-overlap') navbar-overlap @endif">
            <div class="{{ config('backpack.theme-tabler.layout.use-fluid-containers') ? 'container-fluid' : 'container-xl' }}">
                <ul class="navbar-nav">
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </div>
</header>