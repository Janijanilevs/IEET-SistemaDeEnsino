<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc9ebb8b20a50f2f48ac46b88a8996ec
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IeetSite\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IeetSite\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc9ebb8b20a50f2f48ac46b88a8996ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc9ebb8b20a50f2f48ac46b88a8996ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc9ebb8b20a50f2f48ac46b88a8996ec::$classMap;

        }, null, ClassLoader::class);
    }
}
