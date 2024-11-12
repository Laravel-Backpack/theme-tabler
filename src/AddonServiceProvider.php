<?php

namespace Backpack\ThemeTabler;

use Backpack\Basset\Facades\Basset;
use Backpack\CRUD\ThemeServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Blade;

class AddonServiceProvider extends ThemeServiceProvider
{
    protected string $vendorName = 'backpack';
    protected string $packageName = 'theme-tabler';

    public function boot(): void
    {
        $this->autoboot();

        $this->app->afterResolving(BladeCompiler::class, function () {
            Blade::componentNamespace('Backpack\\ThemeTabler\\View\\Components', $this->packageName);
        });
        
        Basset::map('bp-tabler-css', 'https://unpkg.com/@tabler/core@1.0.0-beta19/dist/css/tabler.min.css', ['integrity' => 'sha384-wIPtnwKyfjylOkP4ccy+aMlHOLIfVWHDdlJ35pBwbLDH4HHXq5yG4NknAhu6Rraf', 'crossorigin' => 'anonymous']);
        Basset::map('bp-tabler-js', 'https://unpkg.com/@tabler/core@1.0.0-beta19/dist/js/tabler.min.js', ['integrity' => 'sha384-DnBu3uHMkeDdH3JZaljVS533JqQjgcRVO+uZ3YiBXQYcYITM6HER+4+RPGobVEEZ', 'crossorigin' => 'anonymous']);
    }
}
