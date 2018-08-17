<?php

use PHPUnit\Framework\TestCase;
use \TrubinEN\Strategy\Calculator;

final class CalculatorTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testPlusTwoNumbers(): void
    {
        $sum = new Calculator('+');
        $a = 35;
        $b = 15;

        $this->assertEquals(
            $a + $b,
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws Exception
     */
    public function testSubsTwoNumbers(): void
    {
        $sum = new Calculator('-');
        $a = 35;
        $b = 15;

        $this->assertEquals(
            $a - $b,
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws Exception
     */
    public function testMultTwoNumbers(): void
    {
        $sum = new Calculator('*');
        $a = 35;
        $b = 15;

        $this->assertEquals(
            $a * $b,
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws Exception
     */
    public function testDivsTwoNumbers(): void
    {
        $sum = new Calculator('/');
        $a = 35;
        $b = 15;

        $this->assertEquals(
            floor($a / $b),
            $sum->calc($a, $b)
        );
    }

    /**
     * @throws Exception
     */
    public function testDivsByZero(): void
    {
        $sum = new Calculator('/');
        $this->expectException(\Exception::class);
        $a = 35;
        $b = 0;

        $sum->calc($a, $b);
    }
}