<?php

include_once __DIR__ . '/cantorNumberRecursive.php';
include_once __DIR__ . '/../zadanie1Test.php';

class recursiveTest extends zadanie1Test
{
    protected function _runTest($number)
    {
        $result = cantorNumberRecursive($number);
        return join('/', $result);
    }
}
