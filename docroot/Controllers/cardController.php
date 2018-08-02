<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 9:06 AM
 */

class CardController
{
    private $formNames = [];

    private function handleFormSubmit ($model)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" )
        {
            echo 'post' . print_r($_POST);
            echo 'form names' . print_r($this->formNames);

            $model->submitNewCard($_POST);

        }
    }

    public function init()
    {
        $config = require './Config/config.php';
        $pdo = ObjectUtility::getDb($config);
        $session = ObjectUtility::getSession();

        $formToUse = $config['form1'];
        $formAction = '/cards';
        $form = new Form($formToUse, $formAction);

        $this->formNames = $form->getFormNames();

        $model = new CardModel($pdo);
        $results = $model->getAllCards();

        $view = new View($form);
        $view->setResults($results);
        $view->render('Card', $results);

        $this->handleFormSubmit($model);
    }
}