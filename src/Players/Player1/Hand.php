<?php
namespace App\Players\Player1;

use App\Utility;
use App\Interfaces\AbstractHand;
// use App\Interfaces\HandInterface;

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
        $isStraight = Utility::isStraight( $cards );
        $isFlush    = Utility::isFlush( $suits );

        if( $isStraight && $isFlush ){

            $this->printMsg( "The hand is a Straight Flush!<br>" );

        } else if ( $isStraight ){

            $this->printMsg( "The hand is a Straight!<br>" );

        } else {

            $this->printMsg( "The hand is a general hand!<br>" );
        }
        
    }

}