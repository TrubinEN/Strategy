<?php
/**
 * Created by PhpStorm.
 * User: Work
 * Date: 17.08.2018
 * Time: 0:23
 */

namespace TrubinEN\Strategy;


interface OperationInterface
{
    public function calc(int $a, int $b): int;
}