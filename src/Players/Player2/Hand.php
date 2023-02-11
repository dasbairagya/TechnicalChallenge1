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
namespace App\Players\Player2;

use App\Utility;
use App\Interfaces\AbstractHand;
use App\Interfaces\IsFlushInterface;

/**
 * Class Straight to manipulate the flush hand logic
 *
 */
class Hand extends AbstractHand implements IsFlushInterface
{
    /**
     * Method to check if the hand is a flush
     *
     * @param array $cards, $suits
     *
     * @return string
     */
    public function checkHand($cards, $suits): string
    {
        $isFlush  = $this->isFlush($suits);
        if ($isFlush) {
            return "The hand is a Flush!";
        } else {
            return "The hand is a general hand!";
        }
    }

    /**
    * Returns boolean value based on the provide value
    *
    *@param array $suits
    *
    *@return bool
    */
    public function isFlush($suits): bool
    {
        return Utility::isFlush($suits);
    }
}
