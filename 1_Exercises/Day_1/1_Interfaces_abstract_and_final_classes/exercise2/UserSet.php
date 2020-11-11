<?php

require_once '../exercise1/Client.php';

class UserSet implements Iterator
{
    private $userSet = [];
    private $position = 0;

    public function __construct()
    {
        $this->position = 0;
    }

    public function add(Client $client)
    {
        $this->userSet[] = $client;
    }

    public function current()
    {
        var_dump(__METHOD__);
        return $this->userSet[$this->position];
    }

    public function next()
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function key()
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function valid()
    {
        var_dump(__METHOD__);
        return isset($this->userSet[$this->position]);
    }

    public function rewind()
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function showUserByPassword(string $password)
    {
        foreach ($this->userSet as $k => $v){
            if ($v->getPassword() == $password){
                echo $v->getUsername();
            }
        }
    }

}

$client1 = new Client();
$client1->setLogin('client1');
$client1->setPassword('12345678');

$client2 = new Client();
$client2->setLogin('client2');
$client2->setPassword('123456789');

$userSet = new UserSet();
$userSet->add($client1);
$userSet->add($client2);

foreach($userSet as $key => $value) {
    //var_dump($key, $value);
    print_r($value);
    echo "\n";
}

$userSet->showUserByPassword('12345678');