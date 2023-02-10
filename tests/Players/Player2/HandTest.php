<?php declare(strict_types=1);
/*
 * This file is part of Technical Challenge 1.
 *
 * (c) Gopal Dasbairagya <dasbairagyagopal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Players\Player2;

use App\Cards;
use App\Players\Player1\Hand;
use PHPUnit\Framework\TestCase;

/**
 * Class Straight to manipulate the straight hand logic
 *
 */
class HandTest extends TestCase
{
    /**
     * Method to check if the hand is a straigh or straight flush
     * 
     * @test
     * 
     * @cover Card::generateHandCards
     * @cover Card::getDrawnCardsWithRanks
     * @cover Card::getDrawnSuits
     * @cover Hand::checkHand
     */
    public function checkHand(): void
    {
        $cards = new Cards();
        $handCards  = $cards->generateHandCards();
        $drawnCards = $cards->getDrawnCardsWithRanks();
        $drawnSuits = $cards->getDrawnSuits();

        $hand = new Hand();
        $hand->checkHand($drawnCards, $drawnSuits);
        $this->assertTrue(true);
        
    }

}