<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8735d300f649f8f35743afebbf6a7138
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wisdmlabs\\Todolist\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wisdmlabs\\Todolist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8735d300f649f8f35743afebbf6a7138::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8735d300f649f8f35743afebbf6a7138::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
