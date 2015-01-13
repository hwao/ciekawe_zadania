<?php

include_once __DIR__ . '/cantorNumberAlgebraic.php';
include_once __DIR__ . '/../zadanie1Test.php';

class algebraicTest extends zadanie1Test
{
    protected function _runTest($number)
    {
        $result = cantorNumberAlgebraic($number);
        return join('/', $result);
    }
}
