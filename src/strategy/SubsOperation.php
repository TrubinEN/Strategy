<?php
/**
 * Created by PhpStorm.
 * User: Work
 * Date: 17.08.2018
 * Time: 0:34
 */

namespace TrubinEN\Strategy;


class SubsOperation implements OperationInterface
{
    public function calc(int $a, int $b): int
    {
        return floor($a - $b);
    }
}