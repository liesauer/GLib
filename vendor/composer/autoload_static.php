<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0b7f1c56ee1c31d443625fa54da7830
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'liesauer\\GLib\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'liesauer\\GLib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0b7f1c56ee1c31d443625fa54da7830::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0b7f1c56ee1c31d443625fa54da7830::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
