<?php

namespace geekhub\people;

class Fedor extends People
{

    public function __construct(Fedor $name)
    {
        parent::__construct($name);
    }
    public function say()
    {
        echo "stop talk about this";
    }
} 