<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/28/18
 * Time: 2:05 PM
 */

class ImageCard extends BaseCard
{
    protected $imageUrl;

    public function __construct($text, $title, $imageUrl)
    {
        $this->imageUrl = $imageUrl;
        parent::__construct($text, $title);
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    public function returnImageCard ()
    {
        echo "<section class='card'><img src='$this->imageUrl'<h3>$this->title</h3><p>$this->text</p></section>";
    }
}