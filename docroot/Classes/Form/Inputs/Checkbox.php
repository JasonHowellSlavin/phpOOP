<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/29/18
 * Time: 10:02 AM
 */

class Checkbox
{
    private $labelText;
    private $labelFor;

    public function getCheckboxInput ()
    {
        $input = "<label for='$this->labelFor'>$this->labelText</label><input type='checkbox' name='$this->labelFor'>";
        return $input;
    }

    /**
     * @param mixed $label
     */
    public function setLabelText($labelText)
    {
        $this->labelText = $labelText;
        return $this;
    }

    /**
     * @param mixed $labelFor
     */
    public function setLabelFor($labelFor)
    {
        $this->labelFor = $labelFor;
        return $this;
    }
}