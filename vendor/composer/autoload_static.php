<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c964bbd267a4df4cb29eea34b7db530
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c964bbd267a4df4cb29eea34b7db530::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c964bbd267a4df4cb29eea34b7db530::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c964bbd267a4df4cb29eea34b7db530::$classMap;

        }, null, ClassLoader::class);
    }
}
