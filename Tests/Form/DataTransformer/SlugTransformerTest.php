<?php

namespace Opifer\ContentBundle\Tests\Form\DataTransformer\SlugTransformerTest;

use Mockery as m;
use Opifer\ContentBundle\Form\DataTransformer\SlugTransformer;

class SlugTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransform()
    {
        $slugTransformer = new SlugTransformer();
        $slug = 'Some Slug';

        $this->assertEquals(null, $slugTransformer->transform(null));

        $expected = $slug;
        $actual = $slugTransformer->transform($slug);

        $this->assertSame($expected, $actual);

        $this->assertEquals('/', $slugTransformer->transform('directory/'));
    }

    public function testReverseTransform()
    {
        $slugTransformer = new SlugTransformer();
        $slug = 'Some Slug';

        $expected = $slug;
        $actual = $slugTransformer->reverseTransform($slug);

        $this->assertSame($expected, $actual);
    }
}