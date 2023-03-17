<?php

namespace Backpack\ThemeCoreuiv2;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'backpack';
    protected $packageName = 'theme-coreuiv2';
    protected $commands = [];
}
