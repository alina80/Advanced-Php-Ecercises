<?php

require_once './User.php';

class Admin extends User
{

    protected function checkLogin(string $username, string $password): bool
    {
        $ipCheck = explode('.', $_SERVER['REMOTE_HOST'])[0];
        if (in_array($ipCheck,['127','192']) &&
            $username === $this->username &&
            $password === $this->password){
            return true;
        }
        return false;
    }

    public function setPassword($pass)
    {
        if (strlen($pass) > 9)
        {
            $this->password = $pass;
        }
        return false;
    }

    public function setAge(int $age)
    {
        if ($age > 17){
            $this->age = $age;
        }
        return false;
    }
}