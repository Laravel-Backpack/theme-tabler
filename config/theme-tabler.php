<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Theme Configuration Values
    |--------------------------------------------------------------------------
    |
    | The file provides extra configs on top of config/backpack/ui.php
    |
    | Any value set here will override the ones defined in
    | config/backpack/ui.php when this theme is in use.
    |
    */

    /**
     * LAYOUT
     * Control where to position the menu and its overall behaviour
     */
    'layout' => [
        /**
         * Where should the menu be positioned?
         * @see \Backpack\ThemeTabler\ThemeOptions::LAYOUT_MENU_TYPES
         */
        'type' => \Backpack\ThemeTabler\ThemeOptions::LAYOUT_MENU_HORIZONTAL_OVERLAP,

        /**
         * The color mode used by default.
         * @see \Backpack\ThemeTabler\ThemeOptions::COLOR_MODES
         */
        'defaultColorMode' => \Backpack\ThemeTabler\ThemeOptions::COLOR_MODE_DARK,

        /**
         * When true, a switch is displayed to let admins choose their favorite theme mode.
         * When false, the theme will only use the "defaultColorMode" set above.
         * In case "defaultColorMode" is null, light is the default.
         */
        'showColorModeSwitcher' => true,

        /**
         * When true, colors will display a beautiful Backpack skin :)
         */
        'useBackpackColorSkin' => true,

        /**
         * Fix the top-header component (present in all layout types) and the menu when the layout type is set as "horizontal".
         * This value is skipped when the layout type is horizontal-overlap, using false as default.
         */
        'useStickyHeader' => true,

        /**
         * When true, the content area will take the whole screen width.
         */
        'useFluidContainers' => false,
    ],

    /**
     * CLASSES
     * These can help make the admin panel look similar to your project's design.
     */
    'classes' => [
        /**
         * For background colors use:
         * bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue,
         * bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white.
         *
         * For links to be visible on different background colors use: "navbar-dark", "navbar-light".
         */
        'topHeader' => 'px-3 navbar navbar-expand-md navbar-dark',

        /**
         * Applies only for Vertical Menu Layout
         * For standard sidebar look (transparent):
         *      - Remove "navbar-dark/light"
         *      - Remove "navbar-light/dark" from 'classes.topHeader' and instead use "bg-light"
         * You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success,
         * bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan
         */
        'sidebar' => 'navbar navbar-vertical navbar-expand-lg navbar-dark',

        /**
         * Used in the top container menu when the layout is of horizontal type.
         */
        'menuHorizontalContainer' => 'navbar-expand-md top',

        /**
         * Used in the top menu content when the layout is of horizontal type.
         */
        'menuHorizontalContent' => 'navbar navbar-expand-md navbar-dark',

        /**
         * Make transparent with footer-transparent.
         * Hide it with d-none.
         *
         * Change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info,
         * bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white.
         */
        'footer' => 'footer',
    ],
];