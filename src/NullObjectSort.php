<?php


namespace Varaey\Strategy;

class NullObjectSort implements StrategyInterface
{
    public function manipulateData(array $data): array
    {
        return $data;
    }
}
