<?php

namespace I3bepb\Task3\Test;

use I3bepb\Task3\Courier;
use PHPUnit\Framework\TestCase;

class CourierTest extends TestCase
{
    private Courier $task;

    protected function setUp(): void
    {
        $this->task = new Courier();
    }

    /**
     * @return array[]
     */
    public static function dataProvider(): array
    {
        return [
            [[1, 2, 1, 5, 1, 3, 5, 2, 5, 5], 6, 3],
            [[2, 4, 3, 6, 1], 5, 2],
            [[2, 1, 3, 6, 1, 4, 2, 3, 3, 3, 4, 3, 3, 3, 3, 3, 3, 3, 3], 3, 2],
        ];
    }

    /**
     * @dataProvider dataProvider
     *
     * @test
     */
    public function testGetResult(array $boxes, int $weight, $expected)
    {
        $this->assertEquals($expected, $this->task->getResult($boxes, $weight));
    }

}
