<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6eea5ec6d4ad5b7def71c95dd23045ee
{
    public static $classMap = array (
        'AddMember' => __DIR__ . '/../..' . '/app/models/addMember.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6eea5ec6d4ad5b7def71c95dd23045ee::$classMap;

        }, null, ClassLoader::class);
    }
}
