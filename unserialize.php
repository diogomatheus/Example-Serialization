<?php
include_once('Class/Player.php');

echo 'Loading the player information.';
echo '<br />' . PHP_EOL;

$data = file_get_contents('player.save');
$player = unserialize($data);
echo $player;
?>