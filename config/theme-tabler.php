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
        'menu' => 'vertical', // horizontal, vertical
        'use-sticky-header' => true, // this includes the top-header (always present) and the menu-header when set as horizontal
    ],

    // -------
    // CLASSES
    // -------

    // These can help make the admin panel look similar to your project's design.
    'classes' => [

        'top-header' => 'd-print-none px-3 navbar navbar-expand-md navbar-light',
        // For background colors use: bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info, bg-blue,
        //bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white
        // For links to be visible on different background colors use: "navbar-dark", "navbar-light"

        'main' => 'container-xl',
        // Use "main app-body flex-grow-1 px-2" for a fluid container that uses the full width of your screen

        'sidebar' => 'navbar navbar-vertical navbar-expand-lg navbar-dark',
        // Applies only for Vertical Menu Layout
        // For standard sidebar look (transparent):
        //      - Remove "navbar-dark/light"
        //      - Remove "navbar-light/dark" from 'top-header' and instead use "bg-light"
        // You can also add a background class like bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success,
        //bg-info, bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan

        'topbar' => 'navbar-expand-md top',

        'footer' => 'app-footer d-print-none',
        // hide it with d-none
        // change background color with bg-dark, bg-primary, bg-secondary, bg-danger, bg-warning, bg-success, bg-info,
        //bg-blue, bg-light-blue, bg-indigo, bg-purple, bg-pink, bg-red, bg-orange, bg-yellow, bg-green, bg-teal, bg-cyan, bg-white

    ],

];