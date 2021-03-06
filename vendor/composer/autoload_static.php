<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56a2c6b766fd3daacec2bcc8c6b49c5f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56a2c6b766fd3daacec2bcc8c6b49c5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56a2c6b766fd3daacec2bcc8c6b49c5f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56a2c6b766fd3daacec2bcc8c6b49c5f::$classMap;

        }, null, ClassLoader::class);
    }
}
