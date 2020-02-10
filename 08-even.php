<?php

declare(strict_types=1);

function even(int $number) : bool {
    return $number % 2 === 0 ? true : false;
}

var_dump(even(1)); // bool(false)
var_dump(even(2)); // bool(true)