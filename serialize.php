<?php
include_once('Class/Player.php');

$player = new Player('dmatheus');
$player->setLevel(3);
$player->setLife(60);
echo $player;

echo '<br />' . PHP_EOL;

file_put_contents("player.save", serialize($player));
echo 'Player saved successfully.';
?>