<?php 
// if (php_sapi_name() != 'cli') {
//     die('Please run the project via command-line only.');
// }
require_once __DIR__ . '/vendor/autoload.php';

use App\Cards;
use App\HandFactory;
use App\StraightFlushHandProcessor;

$cards = new Cards();

$handCards  = $cards->generateHandCards();
$drawnCards = $cards->getDrawnCardsWithRanks();
$drawnSuits = $cards->getDrawnSuits();

$cards = implode( ', ', $handCards ). '<br>';
$html = '<h2>Technical Challenge 1</h2><h4> Hand : '.$cards.'</h4>';

foreach ( $handCards as $suit ){
    $card = $api.$suit.".png";
    $html.= '<div class="card" style="display: inline-block; margin-left:2px; text-align:center; min-with:225px">
            <img src="'.$card.'" alt="'.$suit.'" style="height: 280px; width:210px">
            <h4><b>'.$suit.'</b></h4>   
        </div>';
}

echo $html.'<br>';



$players = [ 'player1', 'player2' ];
$player  = $players[0];

$handFactory = new HandFactory;
$hand = $handFactory->createHand( $player );

$processor = new StraightFlushHandProcessor( $hand );
$processor->process( $drawnCards, $drawnSuits );

