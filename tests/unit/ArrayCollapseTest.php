<?php
namespace Sil\PhpArrayDotNotation\tests;

use PHPUnit\Framework\TestCase;
use Sil\PhpArrayDotNotation\DotNotation;

class ArrayCollapseTest extends TestCase
{
    public function testArrayCollapse()
    {
        // Arrange
        $input = [
            'a' => [
                'x' => 'data1',
                'no_key1'
            ],
            'b' => 'data2',
            'no_key2'
        ];
        $expectedOutput = [
            'a.x' => 'data1',
            'a.0' => 'no_key1',
            'b' => 'data2',
            'no_key2'
        ];

        // Act
        $actualOutput = DotNotation::collapse($input);

        // Assert
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}
