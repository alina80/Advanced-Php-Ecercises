<?php

    function ClassLoader($class){
        $c = str_replace('\\', '/', $class);
        require_once './User1.php';
        require_once './User/User.php';
        require_once './User/Watcher.php';
    }
    spl_autoload_register("ClassLoader");

    use \Exercise1\User1;
    use \Exercise1\User\User;
    use \Exercise1\User\Watcher;

    $user = new User1();

    $user->sayHello();
    $user->sayYourClass();
    $user->sayYourNamespace();

    echo "<br>";

    $user2 = new User();
    $user2->sayYourNamespace();
    $user2->sayYourClass();
    $user2->sayGoodbye();

    echo "<br>";

    $user3 = new Watcher();
    $user3->sayYourClass();
    $user3->sayYourNamespace();
    $user3->watch();

