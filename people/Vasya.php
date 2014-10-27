<?php

namespace geekhub\people;

class Vasya extends People
{

    public function __construct( string $name)
    {
        parent::__construct($name);
    }
    public function say()
    {
        echo "Hello everybody";
    }
} 