<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/8/18
 * Time: 2:08 PM
 */

define('INPUTS', __DIR__ . '/Inputs/');
require INPUTS . 'Submit.php';
require INPUTS . 'Text.php';

class Form
{
    public $fields = [];
    private $action;

    /**
     * Form constructor.
     * @param array|null $fields
     *
     * @param null $action
     */
    public function __construct(array $fields = null, $action = null)
    {
        if (!$fields || !$action)
        {
            echo "Both parameters are required to construct the form";
            return;
        }

        if (!$fields)
        {
            echo "Please pass in fields to generate the form";
            return;
        }

        if (!$action)
        {
            echo "please specify an action for the form";
            return;
        }

        $this->action = $action;

        foreach($fields as $input => $settings)
        {
            if (strpos($input,'text') !== false) {
                $text = new Text();
                $textInput = $text->setLabelFor($settings['labelFor'])->setLabelText($settings['labelText'])->getTextInput();
                array_push($this->fields, $textInput);
            }

            if ($input === 'submit') {
               $submit = new Submit();
               $submitButton = $submit->setValue($settings['value'])->getInput();
               array_push($this->fields, $submitButton);
            }
        }
    }

    public function getForm ()
    {
        $inputs ='';
        $formStart = "<form method='post' action='$this->action'>";
        $formEnd = "</form>";

        foreach($this->fields as $field) {
            $inputs .= $field;
        }

        echo $formStart . $inputs . $formEnd;
    }
}