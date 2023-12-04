<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdc9ebb8b20a50f2f48ac46b88a8996ec
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitdc9ebb8b20a50f2f48ac46b88a8996ec', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdc9ebb8b20a50f2f48ac46b88a8996ec', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdc9ebb8b20a50f2f48ac46b88a8996ec::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
