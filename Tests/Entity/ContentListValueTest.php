<?php

namespace Opifer\ContentBundle\Tests\Entity;

use Opifer\ContentBundle\Entity\ContentListValue;
use Doctrine\Common\Collections\ArrayCollection;
use Mockery as m;

class ContentListValueTest extends \PHPUnit_Framework_TestCase
{
    public function testContent()
    {
        $ContentListValue = new ContentListValue();
        $content = new ArrayCollection();

        $expected = $content;
        $ContentListValue->setContent($content);
        $actual = $ContentListValue->getContent();

        $this->assertSame($expected, $actual);
    }

    public function testCount()
    {
        $ContentListValue = new ContentListValue();
        $content = new ArrayCollection();

        $expected = 0;
        $actual = $ContentListValue->count($content);

        $this->assertSame($expected, $actual);
    }

}