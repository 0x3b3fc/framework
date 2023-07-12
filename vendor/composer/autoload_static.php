<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bafc586f76c88eb3454c2c498592b53
{
    public static $prefixLengthsPsr4 = array (
        0 => 
        array (
            '0x3b3fc\\Hannwork\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '0x3b3fc\\Hannwork\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bafc586f76c88eb3454c2c498592b53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bafc586f76c88eb3454c2c498592b53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bafc586f76c88eb3454c2c498592b53::$classMap;

        }, null, ClassLoader::class);
    }
}
