<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/11/18
 * Time: 1:27 PM
 */

class Pet
{
    public static $owner = "Jason";
    public $type;
    public $name;
    public $age;
    public $toys = [];

    public function __construct($type, $name, $age, array $toys)
    {
        $this->type = $type;
        $this->name = $name;
        $this->age = $age;
        if ($toys) {
            foreach ($toys as $toy) {
                array_push($this->toys, $toy);
            }
        }
    }
}