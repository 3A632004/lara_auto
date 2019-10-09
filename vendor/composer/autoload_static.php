<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1212783221175dd668205bf21842c110
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Demo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Demo',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1212783221175dd668205bf21842c110::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1212783221175dd668205bf21842c110::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
