<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5854b640f6c978c0062a767bd7658c9d
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5854b640f6c978c0062a767bd7658c9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5854b640f6c978c0062a767bd7658c9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5854b640f6c978c0062a767bd7658c9d::$classMap;

        }, null, ClassLoader::class);
    }
}
