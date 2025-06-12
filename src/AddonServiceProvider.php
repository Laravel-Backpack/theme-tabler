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
        
        Basset::map('bp-tabler-css', 'https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/css/tabler.min.css', ['integrity' => 'sha384-7aLJEogmAYs7X+MSqgKyrK8EQgOyuqTPfYrAs0hJt6IOuVczGdjpiNMmHiXRozR5', 'crossorigin' => 'anonymous']);
        Basset::map('bp-tabler-js', 'https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/js/tabler.min.js', ['integrity' => 'sha384-DaKT+KCi9ypTlo8Tfz74XJPqZhkV6luseXpEDIzTeYfy4PIZZW9gV6hAxC4/mGDj', 'crossorigin' => 'anonymous']);
    }
}
