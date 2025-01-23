<?php

require __DIR__ . '/vendor/autoload.php';

use Illuminate\Support\Collection;

$number = new Collection([1, 2, 3, 4, 5]);

$number2 = $number->map(fn($item) => $item * 2);

var_dump($number2->toArray());
exit(0);
