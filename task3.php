<?php

function solution(int $x, array $arr) {
    $newArray = [];

    for ($i = 0; $i < count($arr); $i++) {
        if (!in_array($arr[$i], $newArray)) {
            $newArray[] = $arr[$i];
        }

        if (count($newArray) == $x) {
            return $i;
        }
    }

    return false;
}

$arr = [
    0 => 1,
    1 => 3,
    2 => 1,
    3 => 4,
    4 => 2,
    5 => 3,
    6 => 5,
    7 => 4
];

$x = 5;

var_dump(solution($x, $arr));