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

use App\HandFactory;
use App\RandomProcessor;
use PHPUnit\Framework\TestCase;
use App\Interfaces\AbstractHand;

/**
 * Test class to verify various scenarios
 */
class HandFactoryTest extends TestCase
{
    /**
     * Checks whether the hand is a straight hand
     *
     * @test
     *
     * @covers App\HandFactory::createHand
     *
     * @expectedException \Exception
     */
    public function createHand(): void
    {
        $obj = 'player1';
        $factory = new HandFactory();
        $hand = $factory->createHand($obj);
        $this->assertInstanceOf(AbstractHand::class, $hand);
        $obj = 'gopal';
        $this->expectExceptionMessage("A class with name");
        $factory->createHand($obj);
    }
}
