<?php 
namespace App;

/**
 * Abstrac class RandomProcessor to process 
 *
 */
abstract class RandomProcessor
{
   /**
     * Method to process the hands and check for the rules
     * 
     * @param array $hand, $suits
     * 
     * @return void
     */
    abstract function process( $cards, $suits ): void;

    /**
     * Generic method to print any message
     * 
     * @return void
     */
    public function printMsg( $msg ): void
    {
        echo $msg;
        echo '<br>';
    }
    
}