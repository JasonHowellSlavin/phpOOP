<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 2:39 PM
 */
define('LAYOUT', './Source/Templates/');

class View
{
    public $results;

    /**
     * @param mixed $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    public function render($param)
    {
        require LAYOUT . $param . '.php';
    }
}