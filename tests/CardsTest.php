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
namespace Tests;

use App\Cards;
use PHPUnit\Framework\TestCase;

/**
 * Test class to verify generated hand
 */
class CardsTest extends TestCase
{
    private $cards;

    /**
     * Fixture to create the object
     */
    protected function setUp(): void
    {
        $this->cards = new Cards();
    }

    /**
     * Checks if the hand is well-suffled
     *
     * @test
     *
     * @covers App\Cards::shuffleCards
     */
    public function shuffleCards(): void
    {
        $result = $this->cards->shuffleCards();
        $this->assertIsArray($result);
    }

    /**
     * Checks if the hand is created
     *
     * @test
     *
     * @covers App\Cards::createHand
     * @covers App\Cards::shuffleCards
     */
    public function createHand(): void
    {
        $result = $this->cards->createHand();
        $this->assertIsArray($result);
    }

    /**
     * Checks for drawn cards with ranks
     *
     * @test
     *
     * @covers App\Cards::getDrawnCardsWithRanks
     */
    public function getDrawnCardsWithRanks(): void
    {
        $result = $this->cards->getDrawnCardsWithRanks();
        $this->assertIsArray($result);
    }

    /**
     * Checks for drawn suits
     *
     * @test
     *
     * @covers App\Cards::getDrawnSuits
     */
    public function getDrawnSuits(): void
    {
        $result = $this->cards->getDrawnSuits();
        $this->assertIsArray($result);
    }
}
