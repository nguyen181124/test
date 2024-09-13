<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1c213f3aefffcffbd7e2efee7df37a25
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

        spl_autoload_register(array('ComposerAutoloaderInit1c213f3aefffcffbd7e2efee7df37a25', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1c213f3aefffcffbd7e2efee7df37a25', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1c213f3aefffcffbd7e2efee7df37a25::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
