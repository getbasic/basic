<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3ac53b69d1a983e7eebd9106272d76f
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitf3ac53b69d1a983e7eebd9106272d76f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}