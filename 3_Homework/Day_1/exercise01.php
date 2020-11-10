<?php declare(strict_types=1);

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
