<?php

require_once __DIR__ . '/Url.php';

class StandardUrl implements Url
{
    private $url = [];   // url este de forma: a=12&b=13&c=14...

    public function __construct(string $url)
    {
        $uri = explode('?', $url);

        $tmp = explode('&',$uri[1]);

        foreach ($tmp as $value){
            $data = explode('=', $value);

            $key = $data[0];
            $val = $data[1];

            $this->url[$key] = $val;
        }
    }

    public function getParam($name)
    {
        if (isset($this->url[$name])){
            return $this->url[$name];
        }
        return null;
    }
}