@if($nested)
    @include(backpack_view('components.nested-menu-dropdown'))
@else
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
@endif