<?php declare(strict_types=1);
/*
 * This file is part of Technical Challenge 1.
 *
 * (c) Gopal Dasbairagya <dasbairagyagopal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Interfaces;

interface IsFlushInterface
{
   /**
    * Returns boolean value based on the provide value
    *
    *@param array $suits
    *
    *@return bool
    */
   public function isFlush( $suits ): bool;

}