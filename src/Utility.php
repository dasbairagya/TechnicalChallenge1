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
namespace App;

/**
 * This file is part of the Technical Challenge 1.
 *
 * @author Gopal Dasbairagya <dasbairagyagopal@gmail.com>
 */
class Utility
{
    /**
     * Method to manipulate the straight hand logic
     *
     * @param array $cards
     *
     * @return bool;
     */
    public static function isStraight($cards): bool
    {

        //write the logic for straight hand

        if (is_array($cards) && count($cards) != 5) {
            return false;
        }


        // ksort($suits); // not required as suits are already key sorted via array_intersect()
        // echo "ksort <br>";
        // print_r($cards);


        // check if hand has an Ace
        if (isset($cards[0])) {
            $lowest = isset($cards[1]) && isset($cards[2]) && isset($cards[3]) && isset($cards[4]);
            $heighest = isset($cards[10]) && isset($cards[11]) && isset($cards[12]) && isset($cards[13]);
            return ( $lowest || $heighest );
        } else {
        // check for sequenceial rank
            $firstRank = array_key_first($cards);

            for ($i = 1; $i < count($cards); $i++) {
                if (!isset($cards[$firstRank + $i])) {
                // not a straight i.e general hand

                    return false;
                }
            }

            return true;
        // Straight
        }
    }

    /**
     * Method to manipulate the straight flush hand logic
     *
     * @param array $suits
     *
     * @return bool;
     *
     * @throws \InvalidArgumentException
     */
    public static function isFlush($suits): bool
    {
        //write the logic for straight flush hand
        if (!empty($suits)) {
            if (count($suits) == 1) {
                return true;
            //flush
            } else {
                return false;
            //not a flush
            }
        } else {
            throw new \InvalidArgumentException('Suits can not be empty!');
        }
    }
}
