<?php

declare(strict_types=1);

function squares(array $array) : array{
    $newArray = [];
    foreach($array as $number){
        $number = $number * $number;
        $newArray[] = $number;
    }
    return $newArray;
}

var_dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);