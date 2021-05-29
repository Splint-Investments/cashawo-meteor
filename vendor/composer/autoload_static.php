<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd15f31bc9698e7cabdac509c5193df87
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'G' => 
        array (
            'GO\\' => 3,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'GO\\' => 
        array (
            0 => __DIR__ . '/..' . '/peppeocchi/php-cron-scheduler/src/GO',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd15f31bc9698e7cabdac509c5193df87::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd15f31bc9698e7cabdac509c5193df87::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd15f31bc9698e7cabdac509c5193df87::$classMap;

        }, null, ClassLoader::class);
    }
}
