<?php

    function loadVehicles($className)
    {
        $className = $className . '.php';
        if (file_exists('./Vehicles/' . $className)){
            require_once './Vehicles/' . $className;
        }
    }

    function loadUser($className)
    {
        $className = $className . '.php';
        if (file_exists('./User/' . $className)){
            require_once './User/' . $className;
        }
    }

    spl_autoload_register('loadUser');
    spl_autoload_register('loadVehicles');

    $user = new User('User');
    $bike = new Bike('Bike');
    $car = new Car('Car');

    echo $user . "\n";
    echo $bike . "\n";
    echo $car;