@extends(backpack_view('layouts._horizontal.menu_container'), [
    'theme' => 'dark', 
    'overlap' => in_array(url()->current(), backpack_theme_config('options.urlsUsingOverLapEffect') ?? []),
])
