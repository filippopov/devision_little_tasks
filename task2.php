<?php
function solution(int $x, int $y, int $d) : int {
    $counter = 1;
    $sum = $x + $d;
    while ($sum <= $y) {
        $sum += $d;
        $counter++;
    }

    return $counter;
}

$x = 10;
$y = 85;
$d = 30;

var_dump(solution($x, $y, $d));