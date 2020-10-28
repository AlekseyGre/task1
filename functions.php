<?php


add_action('init', 'huy');

function huy()
{
    ?>
    <h1>MAMAWAPADA9</h1>
    <p><?php echo 'DADADA' ?></p>
    <h1><?php echo 'Привет мир' ?></h1>
    <?php
    var_dump($_SERVER['REQUEST_URI']);
    ?>
    <?php
}