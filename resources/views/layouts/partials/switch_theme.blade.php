@foreach(backpack_theme_config('options.colorModes') as $mode => $icon)
@php
    $description = trans('backpack.theme-tabler::theme-tabler.color-mode-description', [
        'mode' => trans('backpack.theme-tabler::theme-tabler.color-mode-'.$mode),
    ]);
@endphp
<button
    onclick="colorMode.switch()"
    class="btn-link text-secondary border-none decoration-none shadow-none nav-link d-none show-theme-{{ $mode }}"
    data-bs-toggle="tooltip"
    data-bs-placement="bottom"
    aria-label="{{ $description }}"
    data-bs-original-title="{{ $description }}">
    <i class="la {{ $icon }} fs-2 m-0"></i>
</button>
@endforeach
