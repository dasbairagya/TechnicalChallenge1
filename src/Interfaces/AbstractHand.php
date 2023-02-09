<?php
namespace App\Interfaces;


/**
 * Card Interface
 */
abstract class AbstractHand 
{
    /**
     * Method to check if the hand is a straigh or straight flush
     * 
     * @param array $cards, $suits
     */
    abstract function checkHand( $cards, $suits ): void;

    public function printMsg( $msg ): void
    {
        echo " $msg <br> ";
    }
}