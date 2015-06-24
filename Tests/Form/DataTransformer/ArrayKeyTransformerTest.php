<?php

namespace Opifer\ContentBundle\Tests\Form\DataTransformer;

use Opifer\ContentBundle\Form\DataTransformer\ArrayKeyTransformer;
use Mockery as m;

class ArrayKeyTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransform()
    {
        $key = 'Some Key';
        $value = 'Some Value';
        $arrayKeyTransformer = new ArrayKeyTransformer($key);

        $expected = array('Some Key' => 'Some Value');
        $actual = $arrayKeyTransformer->transform($value);

        $this->assertSame($expected, $actual);
    }

    public function testReverseTransform()
    {
        $key = 'Some Key';
        $array = array('Some Key' => 'Some Value');
        $arrayKeyTransformer = new ArrayKeyTransformer($key);

        $expected = 'Some Value';
        $actual = $arrayKeyTransformer->reverseTransform($array);

        $this->assertSame($expected, $actual);
    }
}