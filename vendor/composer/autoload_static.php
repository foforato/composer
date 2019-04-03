<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1baa1e52120931333be02dfbef79a98c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Wcs\\Hello' => __DIR__ . '/../..' . '/src/Wcs/Hello.php',
        'HelloWorld\\SayHello' => __DIR__ . '/..' . '/ehime/hello-world/src/HelloWorld/SayHello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1baa1e52120931333be02dfbef79a98c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1baa1e52120931333be02dfbef79a98c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1baa1e52120931333be02dfbef79a98c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1baa1e52120931333be02dfbef79a98c::$classMap;

        }, null, ClassLoader::class);
    }
}
