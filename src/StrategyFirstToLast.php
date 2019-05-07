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

class StrategyFirstToLast implements StrategyInterface
{
    public function manipulateData(array $data): array
    {
        \sort($data);

        return $data;
    }
}
