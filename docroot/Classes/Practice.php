<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/11/18
 * Time: 9:09 AM
 */

class Practice
{
    public $name = 'Jason';
    public $wife = 'Alex';

    public $home = '2365 21st Ave';
    public $inLaws = 'Searcy Arkansas';

    public $number = 0;

    const MY_MIDDLE_NAME = 'Howell';

    public function h2()
    {
        echo '<h2>All I do is return an H2</h2>';
    }

    public function getCouples()
    {
        echo "<p> $this->name and $this->wife are married</p>";
    }

    public function getName ()
    {
        return $this->name;
    }

    public function getMiddleName()
    {
        return self::MY_MIDDLE_NAME;
    }

    public function getHome ()
    {
        return $this->home;
    }

    /**
     * @param string $home
     */
    public function setHome($home)
    {
        $this->home = $home;
    }

    public function set($property, $value = null)
    {
        $this->$property = $value;
    }

    public function addOne ()
    {
        $this->number += 1;
        return $this;
    }

    public function multiplyBy ($num)
    {
        $this->number = $this->number * $num;
        return $this;
    }

    public function getNumber ()
    {
        return $this->number;
    }
}