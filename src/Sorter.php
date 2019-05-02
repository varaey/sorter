<?php


namespace Varaey\Strategy;

use http\Exception\InvalidArgumentException;

class Sorter
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function Sort(array $data)
    {
        $result = $this->strategy->manipulateData($data);
        if (is_array($result)) {
            return implode(',', $result);
        }
    }
}
