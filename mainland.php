<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 26.10.14
 * Time: 1:02
 */

namespace mainland;


abstract class mainland {
    public $koor;
    public $area;
    public $name;

    public function _construct($name, $koor, $area) {
        $this->name = $name;
        $this->koor = $koor;
        $this->area = $area;
    }
    abstract public function getKoordinates ($koor);
    abstract public function getName ($name);
    abstract public function getArea ($area);

}
