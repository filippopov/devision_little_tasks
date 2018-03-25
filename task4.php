<?php


function solution(array $arr) : int {
    sort($arr);

    for ($i = 2; $i < count($arr); $i++) {
        if ($arr[$i] < ($arr[$i - 1] + $arr[$i - 2])) {
            return 1;
        }
    }

    return 0;
}

$firstArr = [
    0 => 10,
    1 => 2,
    2 => 5,
    3 => 1,
    4 => 8,
    6 => 20
];

$secondArr = [
    0 => 10,
    1 => 50,
    2 => 5,
    3 => 1
];

var_dump(solution($secondArr));