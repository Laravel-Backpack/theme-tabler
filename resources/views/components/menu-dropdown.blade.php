<li class="nav-item dropdown">
    <a {{ $attributes->merge([
        'class' => 'nav-link dropdown-toggle',
        'href' => $link ?? '#',
        'data-bs-toggle'=> 'dropdown',
        'role' => 'button',
        'aria-expanded' => 'false',
        'data-bs-auto-close' => 'true',
    ]) }}>
    
        @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
        @if($title)<span>{{ $title }}</span>@endif
    </a>
    <div class="dropdown-menu {{ $open ? 'show' : '' }}" data-bs-popper="static">
    {!! $slot !!}
    </div>
</li>

@bassetBlock('dropdown-menu-js.js')
<script type="text/javascript">
    document.querySelectorAll('header a.nav-link.dropdown-toggle').forEach(function(el) {
        let dropdownMenu = el.nextElementSibling;
        let hasNested = dropdownMenu.querySelector('.dropend');
        
        el.dataset.bsAutoClose = hasNested ? 'outside' : 'true';
    });
    document.querySelectorAll('aside a.nav-link.dropdown-toggle').forEach(function(el) {
        el.dataset.bsAutoClose = 'false';
    });
</script>
@endBassetBlock