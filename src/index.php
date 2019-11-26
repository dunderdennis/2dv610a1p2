<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');


require_once "model/Card.php";

require_once "view/GameView.php";


$gameView = new \view\GameView();

echo $gameView->generateWelcomeMessage();
