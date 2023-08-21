<h6 {{ $attributes->merge(['class' => 'dropdown-header']) }}>
    @if($icon)<i class="nav-icon {{ $icon }}"></i>@endif
    @if($title)<span>{{ $title }}</span>@endif
</h6>
