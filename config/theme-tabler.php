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

    // -------
    // LAYOUT
    // -------

    // Control where we position the menu and its overall behaviour
    'layout' => [
        'menu' => 'horizontal-overlap', // horizontal, vertical, horizontal-overlap
        'use-sticky-header' => true, // this fixes the top-header (always present) and the menu-header when set as "horizontal"
        // "use-sticky-header" defaults to false when using "horizontal-overlap"
        'use-fluid-containers' => false, // if true, the content area will take the whole screen width
    ],

    // -------
    // CLASSES
    // -------

    // These can help make the admin panel look similar to your project's design.
    'classes' => [

        'top-header' => 'px-3 navbar navbar-expand-md navbar-dark',
        // For background colors use: bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue,
        // bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white
        // For links to be visible on different background colors use: "navbar-dark", "navbar-light"

        'sidebar' => 'navbar navbar-vertical navbar-expand-lg navbar-dark',
        // Applies only for Vertical Menu Layout
        // For standard sidebar look (transparent):
        //      - Remove "navbar-dark/light"
        //      - Remove "navbar-light/dark" from 'top-header' and instead use "bg-light"
        // You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success,
        // bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan

        'topbar' => 'navbar-expand-md top',

        'menu-horizontal' => 'navbar navbar-expand-md navbar-dark',

        'footer' => 'footer',
        // Make transparent with footer-transparent
        // Hide it with d-none
        // Change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info,
        // bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white
    ],

];