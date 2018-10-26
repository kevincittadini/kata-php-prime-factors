<?php

namespace PrimeFactors\Test;

use PHPUnit\Framework\TestCase;
use PrimeFactors\PrimeFactors;

class PrimeFactorsTest extends TestCase
{

    /**
     * @test
     */
    public function case0()
    {
        $this->assertEquals([], PrimeFactors::generate(1));
    }

    /**
     * @test
     */
    public function case2()
    {
        $this->assertEquals([2], PrimeFactors::generate(2));
    }

    /**
     * @test
     */
    public function case3()
    {
        $this->assertEquals([2, 2], PrimeFactors::generate(4));
    }

    /**
     * @test
     */
    public function case4()
    {
        $this->assertEquals([2, 3], PrimeFactors::generate(6));
    }

    /**
     * @test
     */
    public function case5()
    {
        $this->assertEquals([2, 2, 3, 3, 5], PrimeFactors::generate(180));
    }
}