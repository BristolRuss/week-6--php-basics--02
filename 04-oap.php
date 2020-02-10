<?php

declare(strict_types=1);

function oap (array $person) : bool {
    $isOap = false;
    if($person["age"] >= 65){
        $isOap = true;
    }
    return $isOap;
};

$a = [ "name" => "Alice", "age" => 52 ];
$b = [ "name" => "Bob", "age" => 67 ];
$c = [ "name" => "Charlie", "age" => 24 ];
$d = [ "name" => "Bob", "age" => 97 ];

var_dump(
    oap($a), // false
    oap($b), // true
    oap($c), // false
    oap($d), // true
);