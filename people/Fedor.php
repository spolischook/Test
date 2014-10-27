<?php


namespace geekhub\people;


class Fedor extends people {

    public function __construct($name) {
        parent::__construct($name);
    }
    public function say() {
        echo "stop talk about this";
    }
} 