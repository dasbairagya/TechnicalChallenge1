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