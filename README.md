Sorter lib.
===============

This is a sorter library. This library use strategy pattern for sorting string or number array.

Installation
------------

```bash
$ composer require varaey/strategy
```
Next step is:

Usage
-----
~~~php
<?php

$array_char = ['f', 'a', 'b', 'd', 'c'];
$array_number = [8, 3, 4, 7, 1, 2, 5, 9, 6];


$sort = new Sorter(new StrategyFirstToLast());
echo 'Start sorting (From First to Last)' . \PHP_EOL;
\print_r($sort->sort($array_char));
\print_r($sort->sort($array_number));

echo \PHP_EOL;

echo 'Start sorting (From Last to First)' . \PHP_EOL;
$sort->setStrategy(new StrategyLastToFirst());
\print_r($sort->sort($array_char));
\print_r($sort->sort($array_number));

echo \PHP_EOL;

echo 'Start sorting (nulll object)' . \PHP_EOL;
$sort->setStrategy(new NullObjectSort());
\print_r($sort->sort($array_char));
\print_r($sort->sort($array_number));

~~~

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Svitozar Kuzemskyi
