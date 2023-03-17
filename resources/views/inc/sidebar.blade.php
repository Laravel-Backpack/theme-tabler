@if (backpack_auth()->check())
<div class="sidebar sidebar-dark sidebar-fixed bg-dark-gradient" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a class="navbar-brand fs-6 text-decoration-none text-uppercase" href="{{ url(config('backpack.base.home_link')) }}" title="{{ config('backpack.base.project_name') }}">
            {!! config('backpack.base.project_logo') !!}
        </a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-mask">
            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content">
                <div class="simplebar-content">
                    <li class="nav-title">{{ trans('backpack::base.administration') }}</li>
                    @include(backpack_view('inc.sidebar_content'))
                </div>
            </div>
        </div>
    </ul>
</div>
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
      document.querySelector('.header-toggler').addEventListener('click', function() {
        sessionStorage.setItem('sidebar-collapsed', Number(sidebar.classList.contains('hide')));
        crud?.table?.fixedHeader.adjust();
      });
  </script>
@endpush
