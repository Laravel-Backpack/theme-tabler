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
            'data-bs-auto-close' => 'false',
            'id' => $dropdownId, 
            ]) }}>
            @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
            @if($title)<span>{{ $title }}</span>@endif
        </a>
        <div class="dropdown-menu {{ $open ? 'show' : '' }} dropdown-submenu" aria-labelledby="{{$dropdownId}}">
        @if(isset($withColumns) && $withColumns)
            <div class="dropdown-menu-columns">
        @endif
            {!! $slot !!}
        @if(isset($withColumns) && $withColumns)
            </div>
        @endif
        </div>
</div>
@else
<li class="nav-item dropdown">
    <a {{ $attributes->merge([
        'class' => 'nav-link dropdown-toggle',
        'href' => $link ?? '#',
        'data-bs-toggle'=> 'dropdown',
        'role' => 'button',
        'data-bs-auto-close' => 'false',
        'id' => $dropdownId,
    ]) }}>

        @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
        @if($title)<span>{{ $title }}</span>@endif
    </a>
    <div class="dropdown-menu {{ $open ? 'show' : '' }}" data-bs-popper="static" aria-labelledby="{{$dropdownId}}">
    @if(isset($withColumns) && $withColumns)
        <div class="dropdown-menu-columns">
    @endif
        {!! $slot !!}
    @if(isset($withColumns) && $withColumns)
        </div>
    @endif
    </div>
</li>
@endif
