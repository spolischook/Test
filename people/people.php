<?php

namespace geekhub\people;

abstract class People implements CanSay
{

    private $name;

    public function  __construct(People $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

} 