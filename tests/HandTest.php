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
use App\Hand;

/**
 * Test class to verify various scenarios
 */
class HandTest extends TestCase
{
    /**
     * Checks whether the hand is a straight hand
     *
     * @test
     *
     * @covers App\Hand::isStraight
     *
     * @dataProvider provideHandCards
     */
    public static function isStraight($expectedResult, $cards): void
    {
        $hand = new Hand();
        $actualResult = $hand->isStraight($cards);
        self::assertEquals($expectedResult, $actualResult);
    }

    /**
     * Dataprovider for isStraight
     */
    public function provideHandCards()
    {
        // straight hand
        $ranks = [6, 7, 8, 9, 10];
        $hand  = [7, 8, 9, 10, 'J'];
        $straightHand = array_combine($ranks, $hand);

        // straight hand lowest
        $ranks1 = [0, 1, 2, 3, 4];
        $hand1  = ['A', 2, 3, 4, 5];
        $straightHandlowest  = array_combine($ranks1, $hand1);

        // straight hand height
        $ranks2 = [10, 11, 12, 13, 0];
        $hand2  = [10, 'J', 'Q', 'K', 'A'];
        $straightHandhighest = array_combine($ranks2, $hand2);

        // general hand
        $ranks3 = [4, 2, 3, 11, 1];
        $hand3  = [5, 3, 4, 'J', 2];
        $generalHand = array_combine($ranks3, $hand3);

        // invalid hand
        $ranks4 = [10, 11, 12, 13, 0, 5];
        $hand4  = [10, 'J', 'Q', 'K', 'A', 6];
        $invalidHand  = array_combine($ranks4, $hand4);

        return [
            'check for straight hand' => [
                true,
                $straightHand
            ],
            'check for straight hand lowest' => [
                true,
                $straightHandlowest
            ],
            'check for straight hand highest' => [
                true,
                $straightHandhighest
            ],
            'check for general hand' => [
                false,
                $generalHand,
            ],
            'check for invalid hand' => [
                false,
                $invalidHand
            ]
        ];
    }

    /**
     * Checks if the hand is a Flush
     *
     * @test
     *
     * @covers App\Hand::isFlush
     *
     * @dataProvider provideHandSuits
     */
    public static function isFlush($expectedResult, $suits): void
    {
        $hand = new Hand();
        $actualResult = $hand->isFlush($suits);
        self::assertEquals($expectedResult, $actualResult);
    }

    /**
     * Dataprovider for isFlush
     */
    public function provideHandSuits()
    {
        return [
            'check for flush' => [
                true,
                ['H']
            ],
            'check for not flush' => [
                false,
                ['C', 'S']
            ]
        ];
    }

    /**
     * If suits is empty raise the exception
     *
     * @test
     *
     * @covers App\Hand::isFlush
     * @expectedException \Exception
     */
    public function raiseException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Suits can not be empty!");
        $hand = new Hand();
        $hand->isFlush([]);
    }
}
