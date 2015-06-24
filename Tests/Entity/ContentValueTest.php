<?php

namespace Opifer\ContentBundle\Tests\Entity;

use Opifer\ContentBundle\Entity\ContentValue;
use Opifer\ContentBundle\Tests\TestData\Content;

class ContentValueTest extends \PHPUnit_Framework_TestCase
{
    public function testContent()
    {
        $contentValue = new ContentValue();
        $content = Content::class;

        $expected = $content;
        $contentValue->setContent($content);
        $actual = $contentValue->getContent();

        $this->assertSame($expected, $actual);
    }
}