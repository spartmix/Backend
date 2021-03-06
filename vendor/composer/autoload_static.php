<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e4fbf8ed13f598bff8e6362a7f0bb0e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e4fbf8ed13f598bff8e6362a7f0bb0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e4fbf8ed13f598bff8e6362a7f0bb0e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
