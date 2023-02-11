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
namespace Tests\Players\Player2;

use App\Cards;
use App\Players\Player2\Hand;
use PHPUnit\Framework\TestCase;

/**
 * Class Straight to manipulate the flush hand logic
 *
 */
class HandTest extends TestCase
{
    /**
     * Method to check if the hand is a flush only
     *
     * @test
     *
     * @covers App\Players\Player2\Hand::checkHand
     * @covers App\Players\Player2\Hand::isFlush
     * @covers App\Utility::isFlush
     *
     * @dataProvider provideHandSuits
     */
    public function checkHand($expected, $data): void
    {
        $hand = new Hand();
        $actual = $hand->checkHand($data[0], $data[1]);
        $this->assertEquals($expected, $actual);
    }

    /**
     * Dataprovider for isFlush, cards is not requred but suits is required
     */
    public function provideHandSuits()
    {
        return [
            'check for flush' => [
                'The hand is a Flush!',
                [null, ['H']]
            ],
            'check for not flush' => [
                'The hand is a general hand!',
                [null, ['C', 'S']]
            ]
        ];
    }
}
