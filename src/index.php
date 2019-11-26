<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');

require_once "view/GameView.php";

$gameView = new GameView();

echo $gameView->generateWelcomeMessage();
