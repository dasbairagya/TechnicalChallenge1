<?php

declare(strict_types=1);

/*
 * This file is part of Technical Challenge 1.
 *
 * (c) Gopal Dasbairagya <dasbairagyagopal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App;

use App\Cards;
use App\Hand;

/**
 * This file is part of the Technical Challenge 1.
 *
 * @author Gopal Dasbairagya <dasbairagyagopal@gmail.com>
 */
class Game
{
    private $cards;

    private array $handCards;
    private array $drawnCards;
    private array $drawnSuits;

    private $hand;

    public function __construct()
    {
        $this->hand = new Hand();
        $this->cards = new Cards();
        $this->handCards  = $this->cards->createHand();
        $this->displayGeneratedHand();
    }

    public function displayGeneratedHand()
    {
        global $api;
        $cards = implode(', ', $this->handCards) . '<br>';
        $html = '<h2>Technical Challenge 1</h2><h4> Hand : ' . $cards . '</h4>';

        foreach ($this->handCards as $suit) {
            $card = $api . $suit . ".png";
            $html .= '<div class="card" style="display:inline-block;margin-left:2px;text-align:center;min-with:225px">
                    <img src="' . $card . '" alt="' . $suit . '" style="height: 280px; width:210px">
                    <h4><b>' . $suit . '</b></h4>   
                </div>';
        }

        return $html . '<br>';
    }

    /**
     * Method to check if the hand is a straigh or straight flush
     *
     * @param array $cards
     * @param array $suits
     *
     * @return string
     */
    public function checkHand($cards, $suits): string
    {
        $isStraight = $this->hand->isStraight($cards);
        $isFlush    = $this->hand->isFlush($suits);
        if ($isStraight && $isFlush) {
            return "The hand is a Straight Flush!";
        } elseif ($isStraight) {
            return "The hand is a Straight!";
        } else {
             return "The hand is a general hand!";
        }
    }

    /**
     * Get the actual rank of the drawn card
     *
     * @return array
     */
    public function getDrawnCardsWithRanks(): array
    {
         return $this->cards->getDrawnCardsWithRanks();
    }

    /**
     * Get the actual distict suits
     *
     * @return array
     */
    public function getDrawnSuits(): array
    {
        return $this->cards->getDrawnSuits();
    }
}
