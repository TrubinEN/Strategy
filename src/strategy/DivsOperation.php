<?php
/**
 * Created by PhpStorm.
 * User: Work
 * Date: 17.08.2018
 * Time: 0:35
 */

namespace TrubinEN\Strategy;


class DivsOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     * @throws \Exception
     */
    public function calc(int $a, int $b): int
    {
        if (!$b)
            throw  new \Exception('Division by zero');

        return floor($a / $b);
    }
}