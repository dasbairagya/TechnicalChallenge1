<?php declare(strict_types=1);
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