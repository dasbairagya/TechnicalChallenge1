<?php

require_once __DIR__ . '/vendor/autoload.php';
use App\Game;

$game = new Game();
echo $game->displayGeneratedHand();
$cards = $game->getDrawnCardsWithRanks();
$suits = $game->getDrawnSuits();
$handStatus = $game->checkHand($cards, $suits);
echo $handStatus;