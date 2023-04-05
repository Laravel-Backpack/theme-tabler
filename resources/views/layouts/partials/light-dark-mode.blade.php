<script>
    const defaultColorMode = window.localStorage.getItem('mode')
        ? window.localStorage.getItem('mode')
        : '{{ backpack_theme_config('options.defaultColorMode') ?? 'light' }}';
    const body = document.getElementsByTagName('body')[0];
    const html = document.getElementsByTagName('html')[0];

    // Allow users to subscribe to an event that listens for changes in the color mode
    // and adjust what's been displayed as needed (like images, etc)
    colorMode = {
        value: null,
        set(theme) {
            const previousTheme = theme === 'light'
                ? 'dark'
                : 'light';

            html.dataset.bsTheme = theme;
            body.classList.remove('theme-' + previousTheme);
            body.classList.add('theme-' + theme);

            window.localStorage.setItem('mode', theme);

            this.value = theme;
            this.colorModeListener();
        },
        get() {
            return this.value;
        },
        switch: function () {
            this.set(this.value === 'light' ? 'dark' : 'light');
        },
        colorModeListener: function (theme) {
        },
        registerListener: function (listener) {
            this.colorModeListener = listener;
        }
    }

    colorMode.set(defaultColorMode);
</script>