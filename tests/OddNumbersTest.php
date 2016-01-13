<?php
require 'odd_numbers.php';

class OddNumbersTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider oddNumbersData
     */
    public function test_odd_numbers($input, $expected)
    {
        $this->assertSame($expected, odd_numbers($input));
    }

    public function oddNumbersData()
    {
        return [
            [[], []],
            [[2], []],
            [[1], [1]],
            [[3, 2, 1], [1, 3]],
            [[1, 0, -1], [-1, 1]],
            [['a', 'b', '1'], []],
            [['a', 111], [111]]
        ];
    }

    public function test_odd_numbers_only_accepts_arrays()
    {
        try {
            odd_numbers(9);
        } catch (Exception $e) {
            return;
        }

        $this->fail('odd_numbers() should only accept an array');
    }
}
