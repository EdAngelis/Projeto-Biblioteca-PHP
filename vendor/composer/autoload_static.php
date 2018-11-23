<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40b71cbf326b5a63ae6f947f81c7d69b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit40b71cbf326b5a63ae6f947f81c7d69b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit40b71cbf326b5a63ae6f947f81c7d69b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
