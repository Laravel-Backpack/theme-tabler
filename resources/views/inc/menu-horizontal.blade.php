<header class="{{ backpack_theme_config('classes.menuHorizontalContainer') }}">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="d-print-none {{ backpack_theme_config('classes.menuHorizontalContent') }}
            @if(\Backpack\ThemeTabler\ThemeOptions::isHorizontalOverlapLayout() && request()->route()->getName() === 'backpack.dashboard') navbar-overlap @endif"
        >
            <div class="{{ \Backpack\ThemeTabler\ThemeOptions::shouldUseFluidContainers() ? 'container-fluid' : 'container-xl' }}">
                <ul class="navbar-nav">
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </div>
</header>