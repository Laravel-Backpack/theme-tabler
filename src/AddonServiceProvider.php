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

    public function boot()
    {
        $this->autoboot();

        $overlapEffectUrls = array_map(fn ($item) => backpack_url($item), config('backpack.theme-tabler.options.urlsUsingOverLapEffect', []));
        
        app('config')->set('backpack.theme-tabler.options.urlsUsingOverLapEffect', $overlapEffectUrls);
    }
}
