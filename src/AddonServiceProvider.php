<?php

namespace Backpack\ThemeTabler;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'backpack';
    protected $packageName = 'theme-tabler';
    protected $commands = [];
    protected $theme = true;
}
