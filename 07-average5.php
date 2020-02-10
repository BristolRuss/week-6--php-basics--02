<?php

declare(strict_types=1);

function average5(float $number1, float $number2, float $number3, float $number4, float $number5) : float {
    $total = $number1 + $number2 + $number3 + $number4 + $number5;
    return $total / 5;
}

var_dump(average5(1, 2, 3, 4, 5)); // float(3)