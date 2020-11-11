<?php

interface Url
{
    public function __construct(string $url);

    public function getParam(string $name);


}