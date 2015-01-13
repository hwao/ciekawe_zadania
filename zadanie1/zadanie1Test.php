<?php

abstract class zadanie1Test extends PHPUnit_Framework_TestCase
{
    /**
     * @param int $number
     * @return string
     */
    abstract protected function _runTest($number);

    /**
     * @dataProvider setOfResult
     */
    public function testObliczenia($liczba, $wynik)
    {
        $this->assertEquals($wynik, $this->_runTest($liczba), 'Dla liczby: ' . $liczba);
    }

    public function setOfResult()
    {
        return [
            [1, '1/1'],
            [2, '1/2'],
            [3, '2/1'],
            [4, '3/1'],
            [5, '2/2'],
            [6, '1/3'],
            [7, '1/4'],
            [8, '2/3'],
            [9, '3/2'],
            [10, '4/1'],
            [11, '5/1'],
            [12, '4/2'],
            [13, '3/3'],
            [14, '2/4'],
            [15, '1/5'],
            [16, '1/6'],
            [17, '2/5'],
            [18, '3/4'],
            [19, '4/3'],
            [20, '5/2'],
            [21, '6/1'],
            [22, '7/1'],
            [23, '6/2'],
            [24, '5/3'],
            [25, '4/4'],
            [26, '3/5'],
            [27, '2/6'],
            [28, '1/7'],
        ];
    }
}
