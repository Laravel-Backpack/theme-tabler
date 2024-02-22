@php
    $dropdownId = 'dropdown-' . Str::random(8);
@endphp
@if($nested)
<div class="dropend">
        <a {{ $attributes->merge([
            'class' => 'dropdown-item dropdown-toggle',
            'href' => $link ?? '#',
            'data-bs-toggle'=> 'dropdown',
            'role' => 'button',
            'aria-expanded' => 'false',
            'data-bs-auto-close' => 'outside',
            'id' => $dropdownId, 
            ]) }}>
            @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
            @if($title)<span>{{ $title }}</span>@endif
        </a>
        <div class="dropdown-menu {{ $open ? 'show' : '' }} dropdown-submenu" aria-labelledby="{{$dropdownId}}">
            {!! $slot !!}
        </div>
</div>
@else
<li class="nav-item dropdown">
    <a {{ $attributes->merge([
        'class' => 'nav-link dropdown-toggle',
        'href' => $link ?? '#',
        'data-bs-toggle'=> 'dropdown',
        'role' => 'button',
        'aria-expanded' => 'false',
        'data-bs-auto-close' => 'outside',
    ]) }}>

        @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
        @if($title)<span>{{ $title }}</span>@endif
    </a>
    <div class="dropdown-menu {{ $open ? 'show' : '' }}" data-bs-popper="static" aria-labelledby="{{$dropdownId}}">
    {!! $slot !!}
    </div>
</li>
@endif
