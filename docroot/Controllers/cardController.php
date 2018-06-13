<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 9:06 AM
 */

require './Classes/ObjectUtility.php';
require './Classes/Model/CardModel.php';
require './Views/View.php';
require './Classes/Form/Form.php';

class CardController
{
    public function init()
    {
        $config = require './Config/config.php';
        $view = new View();
        $pdo = ObjectUtility::getDb($config);
        $session = ObjectUtility::getSession();

        $formToUse = $config['form1'];
        $formAction = '/cards';
        $form = new Form($formToUse, $formAction);

        $form->getForm();

        $model = new CardModel($pdo);
        $results = $model->getAllCards();
        $view->setResults($results);
        $view->render('Card', $results);


        if ($_SERVER["REQUEST_METHOD"] == "POST" )
        {
            echo 'post' . print_r($_POST);
        }
    }
}