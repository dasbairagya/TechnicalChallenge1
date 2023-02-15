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

use PHPUnit\Framework\TestCase;
use App\Game;

/**
 * Test class to verify various scenarios
 */
class GameTest extends TestCase
{

    private $game;

    /**
     * Fixture to create the object
     */
    protected function setUp(): void
    {
        $this->game = new Game();
    }

    /**
     * Checks whether the method returns string
     *
     * @test
     *
     * @covers App\Cards::createHand
     * @covers App\Cards::getDrawnCardsWithRanks
     * @covers App\Cards::getDrawnSuits
     * @covers App\Cards::shuffleCards
     * @covers App\Game::__construct
     * @covers App\Game::displayGeneratedHand
     */
    public function displayGeneratedHand()
    {
        $html = $this->game->displayGeneratedHand();
        $this->assertIsString($html);
    }

    /**
     * Checks whether the method returns string
     *
     * @test
     *
     * @covers App\Cards::createHand
     * @covers App\Cards::getDrawnCardsWithRanks
     * @covers App\Cards::getDrawnSuits
     * @covers App\Cards::shuffleCards
     * @covers App\Game::__construct
     * @covers App\Game::displayGeneratedHand
     * @covers App\Hand::isFlush
     * @covers App\Hand::isStraight
     * @covers App\Game::checkHand
     *
     * @dataProvider provideHandData
     */
    public function checkHand($expectedResult, $inputs): void
    {
        $actualResult = $this->game->checkHand($inputs[0], $inputs[1]);
        self::assertEquals($expectedResult, $actualResult);
    }

    /**
     * Dataprovider for provideHandData
     */
    public function provideHandData()
    {
        // straight hand
        $ranks = [6, 7, 8, 9, 10];
        $hand  = [7, 8, 9, 10, 'J'];
        $straightHand = array_combine($ranks, $hand);

        // general hand
        $ranks3 = [4, 2, 3, 11, 1];
        $hand3  = [5, 3, 4, 'J', 2];
        $generalHand = array_combine($ranks3, $hand3);

        return [
            'check for straight flush hand' => [
                'The hand is a Straight Flush!',
                [$straightHand, ['G']]
            ],
            'check for straight hand' => [
                'The hand is a Straight!',
                [$straightHand, ['G', 'S']]
            ],
            'check for general hand' => [
                'The hand is a general hand!',
                [$generalHand, ['C', 'D', 'S', 'C']],
            ]
        ];
    }

    /**
     * Checks whether the method returns array
     *
     * @test
     *
     * @covers App\Cards::createHand
     * @covers App\Cards::getDrawnCardsWithRanks
     * @covers App\Cards::shuffleCards
     * @covers App\Game::__construct
     * @covers App\Game::displayGeneratedHand
     * @covers App\Game::getDrawnCardsWithRanks
     */
    public function getDrawnCardsWithRanks()
    {
        $result = $this->game->getDrawnCardsWithRanks();
         $this->assertIsArray($result);
    }

    /**
     * Checks whether the method returns array
     *
     * @test
     *
     * @covers App\Cards::createHand
     * @covers App\Cards::getDrawnSuits
     * @covers App\Cards::shuffleCards
     * @covers App\Game::__construct
     * @covers App\Game::displayGeneratedHand
     * @covers App\Game::getDrawnSuits
     */
    public function getDrawnSuits()
    {
        $result = $this->game->getDrawnSuits();
         $this->assertIsArray($result);
    }
}
