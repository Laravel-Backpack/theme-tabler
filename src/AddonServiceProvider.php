<?php

namespace Backpack\ThemeCoreuiv4;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'backpack';
    protected $packageName = 'theme-coreuiv4';
    protected $commands = [];
}
