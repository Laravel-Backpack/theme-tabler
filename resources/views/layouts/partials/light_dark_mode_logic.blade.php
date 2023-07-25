<script>
    class ColorMode {
        constructor(states, defaultColorMode) {
            this.value = null;
            this.valueSystem = null;
            this.listeners = [];
            this.states = states;

            this.set(window.localStorage.getItem('colorMode') ?? defaultColorMode);

            // listen for color scheme changes
            const query = window.matchMedia('(prefers-color-scheme: dark)');
            query.addEventListener('change', e => this.onColorSchemeChange(e));
            this.onColorSchemeChange(query);
        }

        set(theme = 'system', fromSystemChange = false) {
            // clear previous theme attributes
            window.localStorage.removeItem('colorMode');
            document.documentElement.removeAttribute('data-theme');
            document.documentElement.removeAttribute('data-bs-theme');
            document.body.className = document.body.className.replace(/theme-\w+/, '').trim();

            // store changes if not from color scheme changes
            if(!fromSystemChange) {
                this.value = theme;

                if(theme !== 'system') {
                    window.localStorage.setItem('colorMode', theme);
                    document.documentElement.dataset.theme = theme;
                }
            }

            if(theme === 'system') theme = this.valueSystem;

            document.documentElement.dataset.bsTheme = theme;
            document.body.classList.add(`theme-${theme}`);

            this.listeners.forEach(listener => listener && listener(this.result));
        }

        get() {
            return this.value;
        }

        get result() {
            return this.value === 'system' ? this.valueSystem : this.value;
        }

        onColorSchemeChange(query) {
            this.valueSystem = query.matches ? 'dark' : 'light';
            if(this.value === 'system') this.set(this.valueSystem, true);
        }

        switch() {
            let current = this.states.indexOf(this.value);
            let next = current + 1 >= this.states.length ? 0 : current + 1;

            this.set(this.states[next]);
        }

        onChange(callback) {
            return this.listeners.push(callback);
        }

        offChange(reference) {
            this.listeners[reference - 1] = null;
        }
    }

    window.colorMode = new ColorMode(
        // color modes list
        @json(array_keys(backpack_theme_config('options.colorModes') ?? [])),

        // default color mode
        @json(backpack_theme_config('options.defaultColorMode') ?? null)
    );
</script>