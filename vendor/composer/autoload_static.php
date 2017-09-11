<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54ed5438bbea83ce012db4855cc6c55e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
