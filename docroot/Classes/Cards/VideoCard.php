<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/28/18
 * Time: 5:44 PM
 */

class VideoCard extends BaseCard
{
    protected $videoUrl;

    public function __construct($text, $title, $videoUrl)
    {
        $this->videoUrl = $videoUrl;
        parent::__construct($text, $title);
    }

    /**
     * @return mixed
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param mixed $videoUrl
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
    }

    public function  returnVideoCard () {
        echo "<section class='card'><iframe src='$this->videoUrl'></iframe><h3>$this->title</h3><p>$this->text</p></section>";
    }
}