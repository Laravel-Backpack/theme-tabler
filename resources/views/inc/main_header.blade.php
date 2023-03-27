<div class="sticky-top mb-3 d-none d-lg-block">
    <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none px-3">
        <div class="navbar-nav w-100 justify-content-end">
            @include(backpack_view('inc.menu'))
        </div>
    </header>
    @includeWhen(config('backpack.theme-tabler.nav_position') === 'top', backpack_view('inc.topbar'))
</div>
