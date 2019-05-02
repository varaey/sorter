Sorter lib.
===============

This is a sorter library. This library use stratefy pattern for sorting string or number array.

Installation
------------

For creating new project composer require varaey/strategy

```bash
$ composer require varaey/strategy
```
Next step is:

~~~php
$array_char = ['f', 'a', 'b', 'd', 'c'];
$array_number = [8, 3, 4, 7, 1, 2, 5, 9, 6];

$sort = new Sorter(new StrategyFirstToLast());
echo 'Start sorting (From First to Last)' . PHP_EOL;
echo $sort->Sort($array_char) .PHP_EOL;
echo $sort->Sort($array_number) .PHP_EOL;

echo PHP_EOL;

echo 'Start sorting (From Last to First)' . PHP_EOL;
$sort->setStrategy(new StrategyLastToFirst());
echo $sort->Sort($array_char) . PHP_EOL;
echo $sort->Sort($array_number) . PHP_EOL;

~~~

Usage
-----

Main steps that you need to do:
~~~
   ./bin/console 
~~~ 

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2019, Svitozar Kuzemskyi
