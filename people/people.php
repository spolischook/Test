<?php


namespace people;

interface СanSay {
    public function say();
}

abstract class people implements CanSay {
    private $name;

    public function  __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

} 