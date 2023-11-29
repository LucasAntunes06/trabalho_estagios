<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4f853bae7e33aa6ee5f1cb086099c9d
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Util\\' => 5,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Util\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4f853bae7e33aa6ee5f1cb086099c9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4f853bae7e33aa6ee5f1cb086099c9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4f853bae7e33aa6ee5f1cb086099c9d::$classMap;

        }, null, ClassLoader::class);
    }
}
