<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/8/18
 * Time: 2:08 PM
 */

class Form
{
    public $fields = [];
    private $action;
    private $formNames = [];

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
                array_push($this->formNames, $settings['labelText']);
                array_push($this->fields, $textInput);
            }

            if (strpos($input, 'checkbox') !== false) {
                $checkbox = new Checkbox();
                $checkboxInput = $checkbox->setLabelFor($settings['labelFor'])->setLabelText($settings['labelText'])->getCheckboxInput();
                array_push($this->formNames, $settings['labelText']);
                array_push($this->fields, $checkboxInput);
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

    public function getFormNames () {
        return $this->formNames;
    }
}