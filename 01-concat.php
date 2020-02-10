<?php

declare(strict_types=1);

function concat (string $firstWord, string $secondWord) : string {
    $concatenatedString = "{$firstWord} {$secondWord}";
    return $concatenatedString;
};

var_dump(concat("fish", "sticks")); // string(11) "fish sticks"
var_dump(concat("hello", "world")); // string(11) "hello world"