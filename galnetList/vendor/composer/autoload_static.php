<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit472e13c07c2d9bb3346e36f41762bff3
{
    public static $prefixesPsr0 = array (
        's' => 
        array (
            'stringEncode' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/string-encode/src',
            ),
        ),
        'P' => 
        array (
            'PHPHtmlParser' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/php-html-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit472e13c07c2d9bb3346e36f41762bff3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
