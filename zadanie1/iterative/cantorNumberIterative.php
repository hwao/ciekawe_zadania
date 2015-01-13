<?php

function __add($a, $b)
{
    return [$a[0] + $b[0], $a[1] + $b[1]];
}

/**
 * @param int $i
 * @return array|int[]
 */
function cantorNumberIterative($i)
{
    $result = [];
    $item = [1, 1];

    $result[] = $item;
    $i--;
    while ($i > 0) {
        if ($item[0] == 1) {
            $result[] = $item = __add($item, [0, 1]);
            $i--;
            while ($item[1] > 1 && $i > 0) {
                $result[] = $item = __add($item, [+1, -1]);
                $i--;
            }
        } elseif ($item[1] == 1) {
            $result[] = $item = __add($item, [1, 0]);
            $i--;
            while ($item[0] > 1 && $i > 0) {
                $result[] = $item = __add($item, [-1, 1]);
                $i--;
            }
        }
    }
    return $result;
}