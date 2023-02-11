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

use App\RandomProcessor;
use App\Interfaces\HandInterface;

/**
 * Class StraightFlushHandProcessor
 *
 * Process the random generated hand and provide the information whether the hand is a straight flush or not
 */
class StraightFlushHandProcessor extends RandomProcessor
{
    private $hand;
    public function __construct($hand)
    {
        $this->hand = $hand;
    }

    /**
     * Method to process the straight flush hand
     *
     * @param array $hand, $suits
     *
     * @return void
     */
    public function process($cards, $suits): void
    {
        $this->printMsg("<b>Straight Flush checking..</b>");
        $handType = $this->hand->checkHand($cards, $suits);
        $this->printMsg($handType);
    }
}
