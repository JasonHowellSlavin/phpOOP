<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/28/18
 * Time: 1:57 PM
 */

class BaseCard
{
    protected $title;
    protected $text;

    public function __construct($text, $title)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function returnCard ()
    {
        echo "<section class='card'><h3>$this->title</h3><p>$this->text</p></section>";
    }

}