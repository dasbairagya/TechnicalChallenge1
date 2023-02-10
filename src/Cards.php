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
        $draw_counter = 1;
        $hand = [];
        while ($draw_counter <= 5) {
            $draw = array_pop($deck);
            $hand[] = $this->cards[ $draw / 4 ] . $this->suits[ $draw % 4 ];
            $this->handCard[] = $this->cards[ $draw / 4 ];
            $this->handSuits[$this->suits[ $draw % 4 ]] = $this->suits[ $draw % 4 ];
            $draw_counter++;
        }
        // $hand['hand'] = $hand;
        // $hand['hand_card'] = $this->handCard;
        // $hand['hand_suits'] = $this->handSuits;
        return $hand;
    }

    /**
     * Get the actual rank of the drawn card
     *
     * @return array
     */
    public function getDrawnCardsWithRanks(): array
    {
        // print_r($this->handCard); //Array ( [0] => 8 [1] => 6 [2] => 6 [3] => 2 [4] => 9 )
        $result = array_intersect($this->cards, $this->handCard);
        // print_r($result); //Array ( [1] => 2 [5] => 6 [7] => 8 [8] => 9 )
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
