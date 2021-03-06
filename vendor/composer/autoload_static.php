<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a6e9422a0df4abca21fbc980ca658bd
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marveiga\\HotelSearchPackage\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marveiga\\HotelSearchPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a6e9422a0df4abca21fbc980ca658bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a6e9422a0df4abca21fbc980ca658bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a6e9422a0df4abca21fbc980ca658bd::$classMap;

        }, null, ClassLoader::class);
    }
}
