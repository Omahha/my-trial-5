<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8cfcdf63fcee8e094ff9e8b6faf815e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8cfcdf63fcee8e094ff9e8b6faf815e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8cfcdf63fcee8e094ff9e8b6faf815e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
