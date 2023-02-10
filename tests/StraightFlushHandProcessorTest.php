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
use App\HandFactory;
use App\RandomProcessor;
use PHPUnit\Framework\TestCase;
use App\StraightFlushHandProcessor;
use App\Players\Player1\Hand as Player1Hand;

/**
 * Test class to verify various scenarios
 */
class StraightFlushHandProcessorTest extends TestCase
{

    /**
     * Method to test the straight flush hand
     *
     * @test
     *
     * @covers App\StraightFlushHandProcessor::process
     * @covers App\Cards::generateHandCards
     * @covers App\Cards::getDrawnCardsWithRanks
     * @covers App\Cards::getDrawnSuits
     * @covers App\Cards::getDrawnSuits
     * @covers RandomProcessor::printMsg
     *
     * @return void
     */
    public function process(): void
    {
        $cards = new Cards();
        $handCards  = $cards->generateHandCards();
        $drawnCards = $cards->getDrawnCardsWithRanks();
        $drawnSuits = $cards->getDrawnSuits();
        $mockDependency = $this->createMock(Player1Hand::class);
        $mockDependency->expects($this->once())
                       ->method('checkHand')
                       ->with($drawnCards, $drawnSuits);
        $processor = new StraightFlushHandProcessor($mockDependency);
        $result = $processor->process($drawnCards, $drawnSuits);
    }
}
