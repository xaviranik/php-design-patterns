<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc425304a5ec72fc7214e9acfa24aea42
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc425304a5ec72fc7214e9acfa24aea42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc425304a5ec72fc7214e9acfa24aea42::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}