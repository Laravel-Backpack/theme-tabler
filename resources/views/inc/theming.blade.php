<script>
    const defaultColorMode = window.localStorage.getItem('mode')
        ? window.localStorage.getItem('mode')
        : '{{ \Backpack\ThemeTabler\ThemeOptions::getDefaultColorMode() }}';
    const COLOR_MODE_LIGHT = '{{ \Backpack\ThemeTabler\ThemeOptions::COLOR_MODE_LIGHT }}';
    const COLOR_MODE_DARK = '{{ \Backpack\ThemeTabler\ThemeOptions::COLOR_MODE_DARK }}';
    const COLOR_MODE_PREFIX = 'theme-';

    setTheme(defaultColorMode);

    function switchTheme() {
        const mode = window.localStorage.getItem('mode');
        !mode || mode === COLOR_MODE_LIGHT
            ? setTheme(COLOR_MODE_DARK)
            : setTheme(COLOR_MODE_LIGHT);
    }

    function setTheme(theme) {
        const body = document.getElementsByTagName('body')[0];
        const previousTheme = theme === COLOR_MODE_LIGHT
            ? COLOR_MODE_DARK
            : COLOR_MODE_LIGHT;

        const html = document.getElementsByTagName('html')[0];
        html.dataset.bsTheme = theme;

        body.classList.remove(COLOR_MODE_PREFIX + previousTheme);
        body.classList.add(COLOR_MODE_PREFIX + theme);

        window.localStorage.setItem('mode', theme);
    }
</script>