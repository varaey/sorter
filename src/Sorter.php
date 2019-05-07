<?php

declare(strict_types=1);

/*
 * This file is part of the "varaey/sorter" package.
 *
 * (c) Svitozar kuzemskyi <svetozarrambler@@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Varaey\Strategy;

class Sorter
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function sort(array $data): array
    {
        return $this->strategy->manipulateData($data);
    }
}
