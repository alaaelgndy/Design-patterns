<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a9713e798139d3825420be5c0d23fe1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a9713e798139d3825420be5c0d23fe1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a9713e798139d3825420be5c0d23fe1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
