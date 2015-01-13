<?php

/**
 * Znajduje w jakim "wierszu" znajduje sie dana liczba, oraz sume liczb wykorzystana
 * @param $szukana
 * @return array
 */
function stackWlasnoscTrojkata($szukana)
{
    $stack = [];
    for ($sum = 0, $i = 1; $i <= 10; $i++) {
        $stack[] = $sum += $i;

        if ($sum >= $szukana) {
            return $stack;
        }
    }
}

/**
 * @param $szukana
 * @return array
 */
function cantorNumberAlgebraic($szukana)
{
    $stack = stackWlasnoscTrojkata($szukana);
    $bok = sizeof($stack);
    $wykorzystanoLiczb = isSet($stack[$bok - 2]) ? $stack[$bok - 2] : 0;
    $x = $szukana - $wykorzystanoLiczb;

    $item = [$x, ($bok - $x + 1)];

    if ($bok % 2 == 1) { // Jezeli bok jest nieparzysty, to 'wezyk idzie odwrotnie'
        return array_reverse($item);
    }
    return $item;
}