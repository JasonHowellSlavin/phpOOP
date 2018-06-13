<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/13/18
 * Time: 8:35 AM
 */

class Text
{
    private $labelText;
    private $labelFor;

    public function getTextInput ()
    {
        $input = "<label for='$this->labelFor'>$this->labelText</label><input type='text' name='$this->labelFor'>";
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