<?php
/**
 * Created by PhpStorm.
 * User: Work
 * Date: 17.08.2018
 * Time: 0:29
 */

namespace TrubinEN\Strategy;


class PlusOperation implements OperationInterface
{
    public function calc(int $a, int $b): int
    {
        return $a + $b;
    }
}