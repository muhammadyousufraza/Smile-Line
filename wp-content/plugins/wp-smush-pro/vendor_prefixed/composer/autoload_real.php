<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc6dd4119324fee097c8dc86e03d18a1c
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

        spl_autoload_register(array('ComposerAutoloaderInitc6dd4119324fee097c8dc86e03d18a1c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc6dd4119324fee097c8dc86e03d18a1c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc6dd4119324fee097c8dc86e03d18a1c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}