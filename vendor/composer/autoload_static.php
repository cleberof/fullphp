<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit374623cce714d1b775be39290842259a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit374623cce714d1b775be39290842259a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit374623cce714d1b775be39290842259a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit374623cce714d1b775be39290842259a::$classMap;

        }, null, ClassLoader::class);
    }
}
