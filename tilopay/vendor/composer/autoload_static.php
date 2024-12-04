<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1a917d23b8dc2ec9bb2d5f0e3f27b15
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tilopay\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tilopay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1a917d23b8dc2ec9bb2d5f0e3f27b15::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1a917d23b8dc2ec9bb2d5f0e3f27b15::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1a917d23b8dc2ec9bb2d5f0e3f27b15::$classMap;

        }, null, ClassLoader::class);
    }
}
