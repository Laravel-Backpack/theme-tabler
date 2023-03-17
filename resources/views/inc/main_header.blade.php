<header class="{{ config('backpack.base.class.header') }}">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"  aria-label="{{ trans('backpack::base.toggle_navigation')}}">
            <svg class="icon icon-lg" viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'>
                <path stroke='#869AB8' stroke-width='2.25' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22' />
            </svg>
        </button>

        @include(backpack_view('inc.menu'))
    </div>
</header>
