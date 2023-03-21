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
    // CLASSES
    // -------

    // These can help make the admin panel look similar to your project's design.
    'classes' => [

        'header' => 'app-header bg-light border-0 navbar',
        // For background colors use: bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white
        // For links to be visible on different background colors use: "navbar-dark", "navbar-light", "navbar-color"

        'body' => 'app aside-menu-fixed sidebar-lg-show',
        // Try sidebar-hidden, sidebar-fixed, sidebar-compact, sidebar-lg-show

        'sidebar' => 'sidebar sidebar-pills bg-light',
        // Remove "sidebar-transparent" for standard sidebar look
        // Try "sidebar-light" or "sidebar-dark" for dark/light links
        // You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan

        'footer' => 'app-footer d-print-none',
        // hide it with d-none
        // change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white

    ]

];