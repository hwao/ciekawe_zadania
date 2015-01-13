<?php

include_once __DIR__ . '/cantorNumberIterative.php';
include_once __DIR__ . '/../zadanie1Test.php';

class iterativeTest extends zadanie1Test
{
    protected function _runTest($number)
    {
        $list = cantorNumberIterative($number);

        $result = $list[$number - 1];

        return join('/', $result);
    }

    public function testListLength()
    {
        for ($i = 1; $i <= 15; $i++) {
            $this->assertCount($i, cantorNumberIterative($i));
        }
    }
}
