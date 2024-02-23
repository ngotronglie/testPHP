<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1167d8f48fc3548a0d6d2e8355580735
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'N' => 
        array (
            'Ngotr\\Thithu3\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Ngotr\\Thithu3\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1167d8f48fc3548a0d6d2e8355580735::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1167d8f48fc3548a0d6d2e8355580735::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1167d8f48fc3548a0d6d2e8355580735::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1167d8f48fc3548a0d6d2e8355580735::$classMap;

        }, null, ClassLoader::class);
    }
}