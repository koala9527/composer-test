<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit423ef2e67caf40135745d5d917afb6c9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit423ef2e67caf40135745d5d917afb6c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit423ef2e67caf40135745d5d917afb6c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit423ef2e67caf40135745d5d917afb6c9::$classMap;

        }, null, ClassLoader::class);
    }
}
