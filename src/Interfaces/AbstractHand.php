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
namespace App\Interfaces;

/**
 * Abstract class
 */
abstract class AbstractHand
{
    /**
     * Method to check if the hand is a straigh or straight flush
     *
     * @param array $cards, $suits
     *
     * @return string
     */
    abstract public function checkHand($cards, $suits): string;
}
