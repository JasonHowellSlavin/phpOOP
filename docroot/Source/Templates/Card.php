<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 2:36 PM
 */

echo '<h2>Cards</h2><br>';
?>

<?php
    foreach($this->results as $result) { ?>
<section class="card">
    <img src="<?php echo $result['cardImg'] ?>">
    <h3><?php echo $result['cardTitle'] ?></h3>
    <p><?php echo $result['cardDescription'] ?></p>
</section>
<?php } ?>
