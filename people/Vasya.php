<?php


namespace geekhub\people;


class Vasya extends people {

    public function __construct($name) {
        parent::__construct($name);
    }
    public function say() {
        echo "Hello everybody";
    }
} 