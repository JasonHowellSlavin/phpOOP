<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 2:36 PM
 */

?>
<style>
    <?php
        include './Source/CSS/cards.css'
    ?>
</style>

<article>
    <?php $this->form->getForm(); ?>
    <?php
        foreach($this->results as $result) {
            if (!$result['isVideo']) {
                $card = new ImageCard($result['cardDescription'],$result['cardTitle'],$result['cardImg']);
                $card->returnImageCard();
            } else {
                $card = new VideoCard($result['cardDescription'],$result['cardTitle'],$result['cardImg']);
                $card->returnVideoCard();
            }
        }
    ?>
</article>