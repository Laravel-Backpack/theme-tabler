@if (backpack_auth()->check())
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark sidebar px-3">
        <div class="container-fluid">
            <ul class="nav navbar-nav d-flex flex-row align-items-center justify-content-between w-100 d-block d-lg-none">
                @include(backpack_view('inc.sidebar_toggle_btn'), ['forceWhiteLabelText' => true])
                <div class="d-flex flex-row align-items-center">
                    @include(backpack_view('inc.switch_theme'))
                    @include(backpack_view('inc.menu_user_dropdown'))
                </div>
            </ul>
            <h1 class="navbar-brand navbar-brand-autodark d-none d-lg-block align-self-center mb-3">
                <a class="h2 text-decoration-none" href="{{ url(config('backpack.base.home_link')) }}" title="{{ config('backpack.base.project_name') }}">
                    {!! config('backpack.base.project_logo') !!}
                </a>
            </h1>
            <div class="collapse navbar-collapse" id="sidebar-menu">
                <ul class="navbar-nav pt-lg-3">
                    <li class="px-3 fw-bold">{{ ucfirst(strtolower(trans('backpack::base.administration'))) }}</li>
                    @include(backpack_view('inc.sidebar_content'))
                </ul>
            </div>
        </div>
    </aside>
@endif

@push('before_scripts')
    <script type="text/javascript">
        // Save default sidebar class
        let sidebar = document.querySelector('.sidebar');

        // Recover sidebar state
        sidebar.classList.toggle('hide', sessionStorage.getItem('sidebar-collapsed') === '1');
    </script>
@endpush

@push('after_scripts')
    <script>
        // Store sidebar state
        document.querySelector('.header-toggler').addEventListener('click', function () {
            sessionStorage.setItem('sidebar-collapsed', Number(sidebar.classList.contains('hide')));
            crud?.table?.fixedHeader.adjust();
        });
    </script>
@endpush
