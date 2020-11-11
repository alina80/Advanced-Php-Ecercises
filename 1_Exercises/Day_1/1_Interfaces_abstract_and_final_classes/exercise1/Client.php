<?php

require_once 'User.php';

class Client extends User
{

    protected function checkLogin(string $username, string $password): bool
    {
        if ($username === $this->username && $password === $this->password){
            return true;
        }
        return false;
    }

    public function setPassword($password)
    {
        if (strlen($password) > 7)
        {
            $this->password = $password;
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

    public function getPassword()
    {
        return $this->password;
    }

    public function getUsername()
    {
        return $this->username;
    }
}