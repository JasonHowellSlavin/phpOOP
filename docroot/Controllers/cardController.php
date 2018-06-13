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
    public $config = require './Config/config.php';


    private function buildForm ()
    {
        $form = new Form($this->config['form1'], '/cards');
        $form->getForm();
    }




    public function init()
    {
        $view = new View();
        $pdo = ObjectUtility::getDb($this->config);
        $session = ObjectUtility::getSession();

        $this->buildForm();
        
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