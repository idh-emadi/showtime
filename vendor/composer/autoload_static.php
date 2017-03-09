<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd709e059d2235f5b7926c386e7d0b463
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'showtime\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'showtime\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/showtime',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd709e059d2235f5b7926c386e7d0b463::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd709e059d2235f5b7926c386e7d0b463::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
