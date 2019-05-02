<?php


namespace Varaey\Strategy;

class StrategyLastToFirst implements StrategyInterface
{
    public function manipulateData(array $data): array
    {
        // TODO: Implement manipulateData() method.
        rsort($data);

        return $data;
    }
}
