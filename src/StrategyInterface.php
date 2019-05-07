<?php


namespace Varaey\Strategy;

interface StrategyInterface
{
    public function manipulateData(array $data): array;
}
