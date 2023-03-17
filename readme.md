# Theme CoreUI v4

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides a Theme for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel, that uses [CoreUI v4](https://coreui.io/product/free-bootstrap-admin-template/) and implicitly Bootstrap v5. All esthetic customizations on top of CoreUI are done in separate CSS files, which can be easily edited if you don't like them.

The file structure inside this package is the same as CoreUI v2, which is the same as Backpack v3, v4 and v5. If you want to upgrade to Bootstrap v5 and a modern theme, but you've heavily customized your blade files... this theme will be the easiest to upgrade to.

## Screenshots

![Backpack Toggle Field Addon](https://via.placeholder.com/600x250?text=screenshot+needed)


## Installation

**Step 1.** Install via Composer

``` bash
composer require backpack/theme-coreuiv4
```

**Step 2.** Go to `config/backpack/base.php` and change your view namespace:

```diff
-    'view_namespace' => 'backpack::',
+    'view_namespace' => 'backpack.theme-coreuiv4::',
```

## Overriding

If you need to change a blade file in any way, you can easily copy-paste the file to your app, and modify that file any way you want. If you do that to the correct directory, your file will be used instead of the one in the package. But please keep in mind that you will NOT be getting any updates for that file.

The more files you copy-paste and customize, the more difficult it will be to upgrade to newer versions. So please avoid doing this too much.

```bash
# create the custom directory if it's not already there
mkdir -p resources/views/vendor/backpack/theme-coreuiv4

# copy the blade file inside the folder we created above
cp -i vendor/backpack/theme-coreuiv4/src/resources/views/dashboard.blade.php resources/views/vendor/backpack/theme-coreuiv4/dashboard.blade.php
```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/backpack/theme-coreuiv4/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email hello@backpackforlaravel.com instead of using the issue tracker.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/backpack/theme-coreuiv4.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/backpack/theme-coreuiv4.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/backpack/theme-coreuiv4
[link-downloads]: https://packagist.org/packages/backpack/theme-coreuiv4
[link-author]: https://github.com/backpack
[link-contributors]: ../../contributors
