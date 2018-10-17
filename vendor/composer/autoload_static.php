<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0da140d9c16f0363b060a4748980940f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0da140d9c16f0363b060a4748980940f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0da140d9c16f0363b060a4748980940f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}