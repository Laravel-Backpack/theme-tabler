<?php

namespace Backpack\ThemeTabler;

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
        
    }
}
