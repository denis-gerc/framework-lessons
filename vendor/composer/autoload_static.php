<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf2a4abe3e9890dbffe3d1b7dd9e1584
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf2a4abe3e9890dbffe3d1b7dd9e1584::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf2a4abe3e9890dbffe3d1b7dd9e1584::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf2a4abe3e9890dbffe3d1b7dd9e1584::$classMap;

        }, null, ClassLoader::class);
    }
}
