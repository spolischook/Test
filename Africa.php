<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 26.10.14
 * Time: 1:37
 */

namespace mainland;

require_once "mainland.php";

 class Africa extends mainland
 {
   public function getName($name)
   {
       return $this-> getName ($name);
   }
   public function getKoordinates($koor)
   {
       return $this-> getKoordinates($koor);
   }
   public function getArea($area)
   {
       return $this-> getArea($area);
   }
 }