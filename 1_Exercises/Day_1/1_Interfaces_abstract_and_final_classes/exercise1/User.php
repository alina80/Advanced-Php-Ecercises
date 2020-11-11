<?php

abstract class User
{
    protected $username;
    protected $password;
    protected $age;

    abstract protected function checkLogin(string $username, string $password) : bool;

    public function setLogin($login) : void
    {
        $this->username = $login;
    }

    abstract public function setPassword($pass);

    abstract public function setAge(int $age);

    final public function login(string $user, string $pass) :bool
    {
        return $this->checkLogin($user,$pass);
    }

}