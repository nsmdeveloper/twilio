<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bfbfda015943468459ba284e337d89b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bfbfda015943468459ba284e337d89b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bfbfda015943468459ba284e337d89b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
