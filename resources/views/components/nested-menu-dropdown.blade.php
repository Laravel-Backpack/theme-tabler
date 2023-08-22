<div class="dropend">
    <a {{ $attributes->merge([
        'class' => 'dropdown-item dropdown-toggle',
        'href' => $link ?? '#teste',
        'data-bs-toggle'=> 'dropdown',
        'role' => 'button',
        'aria-expanded' => 'false',
        'data-bs-auto-close' => 'outside',
    ]) }}>
        @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
        @if($title)<span>{{ $title }}</span>@endif
    </a>
    <div class="dropdown-menu {{ $open ? 'show' : '' }}">
        {!! $slot !!}
    </div>
</div>