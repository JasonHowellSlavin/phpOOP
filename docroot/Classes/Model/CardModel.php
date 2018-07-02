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
        $statement = $this->db->prepare("SELECT * FROM imageTile;");
        $statement->execute();
        $this->result = $statement->fetchALL(PDO::FETCH_ASSOC);

        return $this->result;
    }

    public function submitNewCard($submissionValues)
    {
        $query = "INSERT INTO imageTile VALUES (null, ?, ?, ?, ?);";
        $statement = $this->db->prepare($query);
        $statement->bindParam(1, $cardImage);
        $statement->bindParam(2, $cardTitle);
        $statement->bindParam(3, $cardDescription);
        $statement->bindParam(4, $isVideo);

        $cardImage = !empty($submissionValues['media-path']) ? $submissionValues['media-path'] : false;
        $cardTitle = !empty($submissionValues['title']) ? $submissionValues['title'] : false;
        $cardDescription = !empty($submissionValues['text']) ? $submissionValues['text'] : false;
        $isVideo = $submissionValues['isVideo'] == 'on' ? true : null;

        if (!$cardImage || !$cardTitle || !$cardDescription) {
            echo 'One of the inputs was not filled out. A card cannot be created';
            return;
        } else {
            $statement->execute();
        }
    }
}