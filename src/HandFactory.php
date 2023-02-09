<?php
namespace App;

use App\Interfaces\AbstractHand;
/**
 * Factory to generate the Hand Obj
 * 
 */
class HandFactory 
{
    public function createHand($hand = 'player1'): AbstractHand
    {
        $hand = "App\\Players\\". ucwords($hand)."\\Hand";

        if( !class_exists( $hand ) ){

            throw new \Exception( 'A class with name ' . $hand . ' could not found' );
        }

        return new $hand();
    }
    
}

?>