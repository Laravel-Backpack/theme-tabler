@foreach(backpack_theme_config('options.colorModes') as $mode => $icon)
<button
    onclick="colorMode.switch()"
    class="btn-link text-secondary border-none decoration-none shadow-none nav-link d-none show-theme-{{ $mode }}"
    data-bs-toggle="tooltip"
    data-bs-placement="bottom"
    aria-label="Using {{ $mode }} color mode"
    data-bs-original-title="Using {{ $mode }} color mode">
    <i class="la {{ $icon }} fs-2 m-0"></i>
</button>
@endforeach