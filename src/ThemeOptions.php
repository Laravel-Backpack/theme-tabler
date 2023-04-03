<?php

namespace Backpack\ThemeTabler;

use Backpack\ThemeTabler\app\Exceptions\ThemeTablerException;

class ThemeOptions
{
    public const LAYOUT_MENU_HORIZONTAL = 'horizontal';

    public const LAYOUT_MENU_VERTICAL = 'vertical';

    public const LAYOUT_MENU_HORIZONTAL_OVERLAP = 'horizontal-overlap';

    public const LAYOUT_MENU_TYPES = [
        self::LAYOUT_MENU_HORIZONTAL,
        self::LAYOUT_MENU_VERTICAL,
        self::LAYOUT_MENU_HORIZONTAL_OVERLAP,
    ];

    public const LAYOUT_MENU_HORIZONTAL_TYPES = [
        self::LAYOUT_MENU_HORIZONTAL,
        self::LAYOUT_MENU_HORIZONTAL_OVERLAP,
    ];

    public const COLOR_MODE_DARK = 'dark';

    public const COLOR_MODE_LIGHT = 'light';

    public const COLOR_MODES = [
        self::COLOR_MODE_LIGHT,
        self::COLOR_MODE_DARK,
    ];

    /**
     * @throws ThemeTablerException
     */
    public static function isHorizontalLayout(): bool
    {
        self::validateLayoutType();

        return in_array(backpack_theme_config('layout.type'), self::LAYOUT_MENU_HORIZONTAL_TYPES);
    }

    /**
     * @throws ThemeTablerException
     */
    public static function isHorizontalOverlapLayout(): bool
    {
        self::validateLayoutType();

        return backpack_theme_config('layout.type') === self::LAYOUT_MENU_HORIZONTAL_OVERLAP;
    }

    public static function shouldUseStaticHeader(): bool
    {
        return (bool) backpack_theme_config('layout.useStickyHeader');
    }

    public static function shouldUseFluidContainers(): bool
    {
        return (bool) backpack_theme_config('layout.useFluidContainers');
    }

    public static function shouldShowColorModeSwitcher(): bool
    {
        return (bool) backpack_theme_config('layout.showColorModeSwitcher');
    }

    public static function shouldUseBackpackColorSkin(): bool
    {
        return (bool) backpack_theme_config('layout.useBackpackColorSkin');
    }

    /**
     * @throws ThemeTablerException
     */
    public static function getDefaultColorMode(): string
    {
        self::validateDefaultColorMode();

        return backpack_theme_config('layout.defaultColorMode') ?? self::COLOR_MODE_LIGHT;
    }

    /**
     * @throws ThemeTablerException
     */
    private static function validateDefaultColorMode(): void
    {
        if (!in_array(backpack_theme_config('layout.defaultColorMode'), self::COLOR_MODES)) {
            self::getErrorMessageWithValidValues('color mode', backpack_theme_config('layout.defaultColorMode'), self::COLOR_MODES);
        }
    }

    /**
     * @throws ThemeTablerException
     */
    private static function validateLayoutType(): void
    {
        if (!in_array(backpack_theme_config('layout.type'), self::LAYOUT_MENU_TYPES)) {
            self::getErrorMessageWithValidValues('layout menu type', backpack_theme_config('layout.type'), self::LAYOUT_MENU_TYPES);
        }
    }

    /**
     * @throws ThemeTablerException
     */
    private static function getErrorMessageWithValidValues(string $valueType, string $wrongValue, array $validValues)
    {
        $validFormattedValues = [];
        foreach ($validValues as $type) {
            $validFormattedValues[] = '"' . $type . '"';
        }

        throw new ThemeTablerException('Invalid ' . $valueType . ' "' . $wrongValue . '" given for theme. Valid values are: ' . implode(', ', $validFormattedValues) . '.');
    }
}