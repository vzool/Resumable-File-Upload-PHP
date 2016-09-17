<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6f5956c326e619bf8c0a1b2ad735621
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dilab\\' => 6,
        ),
        'C' => 
        array (
            'Cake\\Filesystem\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dilab\\' => 
        array (
            0 => __DIR__ . '/..' . '/dilab/resumable.php/src',
        ),
        'Cake\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/filesystem',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6f5956c326e619bf8c0a1b2ad735621::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6f5956c326e619bf8c0a1b2ad735621::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
