<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8b36296805bc4a4b7c3864d9f040c8b
{
    public static $classMap = array (
        'Admin' => __DIR__ . '/../..' . '/../../1_Exercises/Day_1/1_Interfaces_abstract_and_final_classes/exercise1/Admin.php',
        'Client' => __DIR__ . '/../..' . '/../../1_Exercises/Day_1/1_Interfaces_abstract_and_final_classes/exercise1/Client.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'User' => __DIR__ . '/../..' . '/../../1_Exercises/Day_1/1_Interfaces_abstract_and_final_classes/exercise1/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc8b36296805bc4a4b7c3864d9f040c8b::$classMap;

        }, null, ClassLoader::class);
    }
}
