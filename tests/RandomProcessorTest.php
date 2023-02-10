<?php declare(strict_types=1);
/*
 * This file is part of Technical Challenge 1.
 *
 * (c) Gopal Dasbairagya <dasbairagyagopal@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests;

use App\RandomProcessor;
use PHPUnit\Framework\TestCase;


/**
 * Test class to verify various scenarios
 */
class RandomProcessorTest extends TestCase
{
    /**
     *
     */
    public function printMsg()
    {
        $stub = $this->getMockForAbstractClass(RandomProcessor::class);

        $stub->expects($this->once())
             ->method('printMsg')
             ->with('Test Challenge 1')
             ->will($this->returnValue(true));

        $this->assertTrue($mock->printMsg());

        // $this->assertSame('Test Challenge 1', $stub->printMsg());
    }

}