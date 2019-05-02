<?php


namespace Varaey\Strategy;

class StrategyFirstToLast implements StrategyInterface
{
    public function manipulateData(array $data): array
    {
        // TODO: Implement manipulateData() method.
        sort($data);

        return $data;
    }
}
