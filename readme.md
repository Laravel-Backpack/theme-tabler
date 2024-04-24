# Theme Tabler

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides a theme for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel, that uses [Tabler](https://tabler.io/) and implicitly Bootstrap v5. All esthetic customizations on top of Tabler are done in separate CSS files, which can be easily edited if you don't like them.

The file structure inside this package has changed a bit from Backpack v3-v5. We've split split it into smaller, more granual views. So that if you need to customize something by publishing a view, your change is small. If you want the old file structure, you can use the CoreUI v4 or CoreUI v2 themes.

## Screenshots

![all-layouts](https://user-images.githubusercontent.com/33960976/230347568-36f1a08e-6ee5-4534-ace3-9c4b259ca754.gif)


## Installing

### Automatic installation

Because this a 1st party theme, you can quickly install it using

```
php artisan backpack:require:theme-tabler
```

Alternatively, follow the manual installation process below.

## Manual installation

**Step 1.** Install via Composer

``` bash
composer require backpack/theme-tabler
```

**Step 2.** Go to `config/backpack/ui.php` and change your view namespace:

```diff
-    'view_namespace' => 'backpack::',
+    'view_namespace' => 'backpack.theme-tabler::',
```

**Step 3. (Optional)** Publish the theme config file:

```bash
php artisan vendor:publish --tag="theme-tabler-config"
```

## Config
Note: Any value set here will override the ones defined in config/backpack/ui.php when this theme is in use.

**Change layout:** Simply pick a layout
```php
/**
 * Possible values: horizontal, horizontal_dark, horizontal_overlap, vertical,
 * vertical_dark, vertical_transparent (legacy theme), right_vertical, right_vertical_dark, right_vertical_transparent
 */
'layout' => 'horizontal_overlap',
```

**Change auth layout:** Pick a login page layout
```php
'auth_layout' => 'default', //Possible values: default, illustration, cover
```

**Add CSS:** Here you can easily load your own extra CSS styles.

```php
'styles' => [
  base_path('vendor/backpack/theme-tabler/resources/assets/css/color-adjustments.css'),
  base_path('vendor/backpack/theme-tabler/resources/assets/css/colors.css'),
 // add your css here
],
```

**Add JS:** Here you can easily include your own JS files.

```php
'scripts' => [],
```

**More configs:** Get more out of theme-tabler.
- Take more control on `Dark Mode`
- Make `Container` fluid to utilize the space
- Choose how `Header`, `Sidebar` should be

```php
'options' => [
   /**
    * The available color modes.
    */
    'colorModes' => [
        'system' => 'la-desktop',
        'light' => 'la-sun',
        'dark' => 'la-moon',
    ],

    /**
     * The color mode used by default.
     */
    'defaultColorMode' => 'system', // system, light, dark

    /**
     * When true, a switch is displayed to let admins choose their favorite theme mode.
     * When false, the theme will only use the "defaultColorMode" set above.
     * In case "defaultColorMode" is null, system is the default.
     */
    'showColorModeSwitcher' => true,

    /**
     * Fix the top-header component (present in "vertical_transparent") and the menu when the layout type is set as "horizontal".
     * This value is skipped when the layout type is horizontal-overlap, using false as default.
     */
    'useStickyHeader' => false,

    /**
     * When true, the content area will take the whole screen width.
     */
    'useFluidContainers' => false,

    /**
     * When true, the sidebar content for vertical layouts will not scroll with the rest of the content.
     */
    'sidebarFixed' => false,

    /**
     * When true, horizontal layouts will display the classic top bar on top to free some space when multiple nav items are used.
     */
    'doubleTopBarInHorizontalLayouts' => false,

    /**
      * When true, the password input will have a toggle button to show/hide the password.
      */
    'showPasswordVisibilityToggler' => true,
],
```
## Uninstalling

To uninstall this Backpack theme:

1. Remove the composer package. Eg. `composer remove backpack/theme-tabler`
2. Delete the config file. Eg. `rm -rf config/backpack/theme-tabler.php`
3. Install a new theme (eg. `php artisan backpack:require:theme-coreuiv4`) or change the `view_namespace` in `config/backpack/ui.php` to the theme you want to be active.

## Overriding

If you need to change a blade file in any way, you can easily copy-paste the file to your app, and modify that file any way you want. If you do that to the correct directory, your file will be used instead of the one in the package. But please keep in mind that you will NOT be getting any updates for that file.

The more files you copy-paste and customize, the more difficult it will be to upgrade to newer versions. So please avoid doing this too much.

```bash
# create the custom directory if it's not already there
mkdir -p resources/views/vendor/backpack/theme-tabler

# copy the blade file inside the folder we created above
cp -i vendor/backpack/crud/src/resources/views/ui/dashboard.blade.php resources/views/vendor/backpack/theme-tabler/dashboard.blade.php
```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/backpack/theme-tabler/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email hello@backpackforlaravel.com instead of using the issue tracker.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/backpack/theme-tabler.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/backpack/theme-tabler.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/backpack/theme-tabler
[link-downloads]: https://packagist.org/packages/backpack/theme-tabler
[link-author]: https://github.com/backpack
[link-contributors]: ../../contributors
