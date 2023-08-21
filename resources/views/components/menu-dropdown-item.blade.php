<a {{ $attributes->merge(['class' => 'dropdown-item', 'href' => $link]) }}>
    @if($icon)<i class="nav-icon {{ $icon }} d-block d-lg-none d-xl-block"></i>@endif
    @if($title)<span>{{ $title }}</span>@endif
</a>
