<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22f0e53f27e4d782120318164958d27f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit22f0e53f27e4d782120318164958d27f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22f0e53f27e4d782120318164958d27f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22f0e53f27e4d782120318164958d27f::$classMap;

        }, null, ClassLoader::class);
    }
}
