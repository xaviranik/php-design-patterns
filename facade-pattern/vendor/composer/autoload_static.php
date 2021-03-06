<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66aae04d538eb28a10577ee09950f047
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
        'App\\Database' => __DIR__ . '/../..' . '/src/Database.php',
        'App\\Facades\\LogTemplateFacade' => __DIR__ . '/../..' . '/src/Facades/LogTemplateFacade.php',
        'App\\Logger' => __DIR__ . '/../..' . '/src/Logger.php',
        'App\\Template' => __DIR__ . '/../..' . '/src/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66aae04d538eb28a10577ee09950f047::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66aae04d538eb28a10577ee09950f047::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66aae04d538eb28a10577ee09950f047::$classMap;

        }, null, ClassLoader::class);
    }
}
