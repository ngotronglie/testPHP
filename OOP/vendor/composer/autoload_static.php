<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e1063758906ffd45e7768ce6be38211
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
        'N' => 
        array (
            'Ngotr\\Oop\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'Ngotr\\Oop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e1063758906ffd45e7768ce6be38211::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e1063758906ffd45e7768ce6be38211::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1e1063758906ffd45e7768ce6be38211::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1e1063758906ffd45e7768ce6be38211::$classMap;

        }, null, ClassLoader::class);
    }
}