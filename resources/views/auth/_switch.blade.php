@if(backpack_theme_config('options.showColorModeSwitcher'))
    <div class="pt-3 pe-3 d-flex justify-content-end w-100">
        <a href="javascript:void(0);" onclick="colorMode.switch()" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
            <i class="la la-sun fs-2"></i>
        </a>
        <a href="javascript:void(0);" onclick="colorMode.switch()" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
            <i class="la la-moon fs-2"></i>
        </a>
    </div>
@endif