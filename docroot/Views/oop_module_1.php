<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/8/18
 * Time: 1:32 PM
 */
include './Classes/Practice.php';
include './Classes/Pet.php';
//include './Classes/cardModel/dbConnection.php';


echo 'In OOP Module 1';

$practice = new Practice();

$practice->h2();
$practice->getCouples();
echo "$practice->name is name , and my middle name is " . $practice->getMiddleName() . "<br>";
echo "$practice->wife is wife";
echo PHP_EOL;
echo "getter method " . $practice->getName() . '<br>';

echo 'get home ' . $practice->getHome() . '<br>';
$practice->setHome('164 Mt. Etna Drive');
echo 'get home ' . $practice->getHome() . '<br>';
$practice->home = $practice->inLaws;
echo 'get home ' . $practice->getHome() . '<br>';
$practice->set('sister', 'Alison');
echo 'Sister: ' . $practice->sister . '<br>';

echo "number: " . $practice->addOne()->addOne()->multiplyBy(12)->getNumber() . "<br><br><br>";

$jeanLuc = new Pet('dog', 'Jean Luc', 6, ['ball', 'bone', 'stuffed monkey']);


var_dump($jeanLuc);

echo $jeanLuc::$owner;

$db = pdoConnect::connectToDB();

