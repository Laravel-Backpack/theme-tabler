<div class="@if(config('backpack.theme-tabler.layout.use-sticky-header')) sticky-top @endif d-none d-lg-block">
    <header class="{{ config('backpack.theme-tabler.classes.top-header') }}">
        <div class="navbar-nav w-100 justify-content-end">
            @include(backpack_view('inc.menu'))
        </div>
    </header>
    @includeWhen(config('backpack.theme-tabler.layout.menu') === 'horizontal', backpack_view('inc.menu-horizontal'))
</div>
