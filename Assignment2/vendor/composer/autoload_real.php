<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1e882f6b3f1ca555bec86ecb40e6d6de
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit1e882f6b3f1ca555bec86ecb40e6d6de', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1e882f6b3f1ca555bec86ecb40e6d6de', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1e882f6b3f1ca555bec86ecb40e6d6de::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
