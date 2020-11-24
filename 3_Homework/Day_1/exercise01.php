<?php declare(strict_types=1);

require_once './vendor/autoload.php';

class AutoLoadFunction
{

    //Function autoload

    //end 

    public function getClient(): Client
    {
        return new Client();
    }

    public function getAdmin(): Admin
    {
        return new Admin();
    }

}
$a = new AutoLoadFunction();
$a->getAdmin();
$a->getClient();