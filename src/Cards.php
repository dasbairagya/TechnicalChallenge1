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

/**
 * Class to generate the random hands
 *
 */
class Cards
{

    /**
     * Suits
     *
     * @var array
     */
    protected $suits = [ 'C', 'D', 'H', 'S' ];
/**
     * Cards
     *
     * @var array
     */
    protected $cards = [ 'A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K' ];
/**
     * Drawn cards
     *
     * @var array
     */
    private $handCard = [];
/**
     * Drawn suits
     *
     * @var array
     */
    private $handSuits = [];
/**
     * Shuffle the deck of random cards
     *
     * @return array
     */
    public function shuffleCards(): array
    {
        $deck = range(0, 51);
        shuffle($deck);
        return $deck;
    }

    /**
     * Generate the hand of random cards
     *
     * @return array
     */
    public function generateHandCards(): array
    {
        $deck = $this->shuffleCards();
        $drawCounter = 1;
        $hand = [];
        while ($drawCounter <= 5) {
            $draw = array_pop($deck);
            $hand[] = $this->cards[ $draw / 4 ] . $this->suits[ $draw % 4 ];
            $this->handCard[] = $this->cards[ $draw / 4 ];
            $this->handSuits[$this->suits[ $draw % 4 ]] = $this->suits[ $draw % 4 ];
            $drawCounter++;
        }
        return $hand;
    }

    /**
     * Get the actual rank of the drawn card
     *
     * @todo: Need to optimize as with Hand : QC, 6S, KC, QH, 5S which will return Array ( [4] => 5 [5] => 6 [11] => Q [12] => K )
     *        for which the count will be 4 hence Utility@33 will always retun false hence it will fail to chek invalid card senarios
     * @return array
     */
    public function getDrawnCardsWithRanks(): array
    {
        $result = array_intersect($this->cards, $this->handCard); 
        return $result;
    }

    /**
     * Get the actual distict suits
     *
     * @return array
     */
    public function getDrawnSuits(): array
    {
        return $this->handSuits;
    }
}
