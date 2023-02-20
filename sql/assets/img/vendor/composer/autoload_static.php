<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafe0d37e8b02d7eb6d4a0931aafcf163
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wricw\\Img\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wricw\\Img\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitafe0d37e8b02d7eb6d4a0931aafcf163::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafe0d37e8b02d7eb6d4a0931aafcf163::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitafe0d37e8b02d7eb6d4a0931aafcf163::$classMap;

        }, null, ClassLoader::class);
    }
}
