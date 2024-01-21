<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f56d4af79401e45183f46a6c9347dc5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MpesaSdk\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MpesaSdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f56d4af79401e45183f46a6c9347dc5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f56d4af79401e45183f46a6c9347dc5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f56d4af79401e45183f46a6c9347dc5::$classMap;

        }, null, ClassLoader::class);
    }
}
