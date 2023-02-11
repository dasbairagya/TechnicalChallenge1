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
namespace App\Players\Player1;

use App\Utility;
use App\Interfaces\AbstractHand;
use App\Interfaces\IsFlushInterface;
use App\Interfaces\IsStraightInterface;

/**
 * Class Straight to manipulate the straight hand logic
 *
 */
class Hand extends AbstractHand implements IsStraightInterface, IsFlushInterface
{

    /**
     * Method to check if the hand is a straigh or straight flush
     *
     * @param array $cards, $suits
     *
     * @return string
     */
    public function checkHand($cards, $suits): string
    {
        // print_r($cards);
        // var_dump(count($cards));
        // if (count($cards) != 5) { //@lookup: Cards@81
        //     return "Invalid hand!";
        // }
        $isStraight = $this->isStraight($cards);
        $isFlush    = $this->isFlush($suits);
        if ($isStraight && $isFlush) {
            return "The hand is a Straight Flush!";
        } elseif ($isStraight) {
            return "The hand is a Straight!";
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
    public function isStraight($cards): bool
    {
        return Utility::isStraight($cards);
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
