<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/13/18
 * Time: 8:35 AM
 */

class Submit
{
    private $value;

    public function getInput()
    {
        $submit = "<input type='submit' value='$this->value'>";
        return $submit;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}