<?php
namespace App\Players\Player2;

use App\Utility;
use App\Interfaces\AbstractHand;
use App\Interfaces\HandInterface;

/**
 * Class Straight to manipulate the straight hand logic
 *
 */
class Hand extends AbstractHand
{
    /**
     * Method to check if the hand is a straigh or straight flush
     * 
     * @param array $cards, $suits
     */
    public function checkHand( $cards, $suits ): void
    {
        $isFlush  = Utility::isFlush( $suits );

        if( $isFlush ){

            $this->printMsg( "The hand is a Flush!<br>" );

        } else {

            $this->printMsg( "The hand is a general hand!<br>" );
        }
        
    }

}