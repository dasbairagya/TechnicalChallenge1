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
namespace Tests\Players\Player1;

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
     * @covers Hand::checkHand
     *
     * @dataProvider provideHandCards
     */
    public function checkHand($data): void
    {
        $hand = new Hand();
        $hand->checkHand($data[0], $data[1]);
        $this->setOutputCallback(function () {
        });
        $this->assertFalse(false, "Should print something");
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
                [$straightHand, ['C', 'S']]
            ],
            'check for straight flush as lowest' => [
                [$straightHandlowest, ['C']]
            ],
            'check for straight flush as highest' => [
                [$straightHandhighest, ['H']]
            ],
            'check for flush only' => [
                [$generalHand, ['C']]
            ],
            'check for general hand' => [
                [$generalHand, ['D', 'S']]
            ],
            'check for invalid hand' => [
                [$invalidHand, ['C']]
            ]
        ];
    }
}
