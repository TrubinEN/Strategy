<?php

namespace TrubinEN\Strategy;

class Calculator
{
    /** @var PlusOperation */
    private $strategy;

    /**
     * Calculator constructor.
     * @param string $operation
     * @throws \Exception
     */
    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }


    /**
     * @param $operation
     * @return PlusOperation
     * @throws \Exception
     */
    private function getStrategy($operation): OperationInterface
    {
        switch ($operation) {
            case '+':
                return new PlusOperation();
            case '-':
                return new SubsOperation();
            case '*':
                return new MultOperation();
            case '/':
                return new DivsOperation();
            default :
                throw new \Exception("Unknown operation");
        }
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calc(int $a, int $b): int
    {
        return $this->strategy->calc($a, $b);
    }
}