{{--
    we use a render blocking script in <head> to force the theme attribute to be in the document before it renders
    avoiding white flicks when for example, using the dark color mode.
--}}
<script>document.documentElement.setAttribute("data-bs-theme", localStorage.colorMode ?? 'light');</script>

@basset('https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/css/tabler.min.css', true, ['integrity' => 'sha384-7aLJEogmAYs7X+MSqgKyrK8EQgOyuqTPfYrAs0hJt6IOuVczGdjpiNMmHiXRozR5', 'crossorigin' => 'anonymous'])
@basset(base_path('vendor/backpack/theme-tabler/resources/assets/css/style.css'))
@basset(base_path('vendor/backpack/theme-tabler/resources/assets/css/color-adjustments.css'))
