<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2eb2bec348743652aa2a2bceea9c617a
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
        'App\\ChickenBurger' => __DIR__ . '/../..' . '/src/ChickenBurger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2eb2bec348743652aa2a2bceea9c617a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2eb2bec348743652aa2a2bceea9c617a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2eb2bec348743652aa2a2bceea9c617a::$classMap;

        }, null, ClassLoader::class);
    }
}
