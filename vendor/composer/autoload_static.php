<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e99216b9ac83c3470f480a814196000
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PhpConsole' => 
            array (
                0 => __DIR__ . '/..' . '/php-console/php-console/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit2e99216b9ac83c3470f480a814196000::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
