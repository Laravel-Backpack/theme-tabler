# ThemeCoreuiv2

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

This package provides a Theme for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel, that uses CoreUI v2 and implicitly Bootstrap v4. As a UI (aka UI kit, aka admin panel template) it looks and works as seen on https://backstrap.net/ - as it is a customized version of CoreUI v2.

It has been launched in 2021 as part of Backpack's core. In 2023 it has been sparated into this package, as a way to provide 100% backwards-compatibility, for whoever doesn't want to upgrade to the newer themes, like CoreUI v4 and Tabler.

Why would anybody not want to upgrade? Well... because some developers:
- have to support IE; and while Bootstrap v5 is better in every way... it does drop support for IE;
- have customized their blade files so much, that it's impossible to upgrade;

## Screenshots

> **// TODO: add a screenshot and delete these lines;**
> to add a screenshot to a github markdown file, the easiest way is to
> open an issue, upload the screenshot there with drag&drop, then close the issue;
> you now have that image hosted on Github's servers; so you can then right-click
> the image to copy its URL, and use that URL wherever you want (for example... here)

![Backpack Toggle Field Addon](https://via.placeholder.com/600x250?text=screenshot+needed)


## Installation

Step 1. Install via Composer

``` bash
composer require backpack/theme-coreuiv2
```

Step 2. Go to `config/backpack/base.php` and change your view namespace:

```diff
-    'view_namespace' => 'backpack::',
+    'view_namespace' => 'backpack.theme-coreuiv2::',
```

## Overriding

If you need to change a blade file in any way, you can easily copy-paste the file to your app, and modify that file any way you want. If you do that to the correct directory, your file will be used instead of the one in the package. But please keep in mind that you will NOT be getting any updates for that file.

The more files you copy-paste and customize, the more difficult it will be to upgrade to newer versions. So please avoid doing this too much.

// TODO: COULD/SHOULD create a command for that

```bash
# create the custom directory if it's not already there
mkdir -p resources/views/vendor/backpack/theme-coreuiv2

# copy the blade file inside the folder we created above
cp -i vendor/backpack/theme-coreuiv2/src/resources/views/dashboard.blade.php resources/views/vendor/backpack/theme-coreuiv2/dashboard.blade.php
```

## Change log

Changes are documented here on Github. Please see the [Releases tab](https://github.com/backpack/theme-coreuiv2/releases).

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email hello@backpackforlaravel.com instead of using the issue tracker.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/backpack/theme-coreuiv2.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/backpack/theme-coreuiv2.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/backpack/theme-coreuiv2
[link-downloads]: https://packagist.org/packages/backpack/theme-coreuiv2
[link-author]: https://github.com/backpack
[link-contributors]: ../../contributors
