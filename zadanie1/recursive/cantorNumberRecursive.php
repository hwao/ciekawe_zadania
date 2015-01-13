<?php

function cantorNumberRecursive($n, $item = [1, 1], $mod = [0, 0])
{
    $item[0] += $mod[0];
    $item[1] += $mod[1];

    if ($n == 1) {
        return $item;
    }

    if ($mod == [0, 1]) {
        if ($item[1] > 1) {
            return cantorNumberRecursive($n - 1, $item, [+1, -1]);
        }
    }
    if ($mod == [1, 0]) {
        if ($item[0] > 1) {
            return cantorNumberRecursive($n - 1, $item, [-1, +1]);
        }
    }

    if ($item[0] == 1) {
        return cantorNumberRecursive($n - 1, $item, [0, 1]);
    } elseif ($item[1] == 1) {
        return cantorNumberRecursive($n - 1, $item, [1, 0]);
    }

    return cantorNumberRecursive($n - 1, $item, $mod);
}