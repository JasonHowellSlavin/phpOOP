<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 9:50 AM
 */

class CardModel
{
    public $result;
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllCards()
    {
        $statment = $this->db->prepare("SELECT * FROM imageTile;");
        $statment->execute();
        $this->result = $statment->fetchALL(PDO::FETCH_ASSOC);

        return $this->result;
    }
}