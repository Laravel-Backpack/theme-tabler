<header class="d-print-none {{ backpack_theme_config('classes.topHeader') ?? 'd-none d-lg-block px-3 navbar navbar-expand-md navbar-dark' }}">
    <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container-fluid' : 'container-xl' }}">
        <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container-fluid' : 'container-xl' }} d-flex align-items-center justify-content-between">
            <a class="h2 text-decoration-none" href="{{ url(backpack_theme_config('home_link')) }}" title="{{ backpack_theme_config('project_name') }}">
                {!! backpack_theme_config('project_logo') !!}
            </a>
            <div class="navbar-nav">
                @include(backpack_view('inc.menu'))
            </div>
        </div>
    </div>
</header>