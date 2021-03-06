<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02f6b9fb5597098f77847a836392d9ad
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit02f6b9fb5597098f77847a836392d9ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02f6b9fb5597098f77847a836392d9ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02f6b9fb5597098f77847a836392d9ad::$classMap;

        }, null, ClassLoader::class);
    }
}
