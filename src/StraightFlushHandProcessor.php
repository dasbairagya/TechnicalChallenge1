<?php 
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
    private  $hand;

    public function __construct( $hand )
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
    public function process( $cards, $suits ): void
    {
        $this->printMsg( "<b>Straight Flush checking..</b>" );

        $this->hand->checkHand( $cards, $suits );
        
    }

}