<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffd700d68f9ddc6df1b77627491f990d
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Codecouese\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Codecouese\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Codecouese',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffd700d68f9ddc6df1b77627491f990d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffd700d68f9ddc6df1b77627491f990d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
