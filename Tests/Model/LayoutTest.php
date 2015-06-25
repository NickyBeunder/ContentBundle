<?php

namespace Opifer\ContentBundle\Tests\Model;

use Opifer\ContentBundle\Model\Layout;
use Mockery as m;

class LayoutTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $layout = new Layout();
        $name = 'Some Name';

        $expected = $name;
        $layout->setName($name);
        $actual = $layout->getName();

        $this->assertSame($expected, $actual);
    }

    public function testDescription()
    {
        $layout = new Layout();
        $description = 'Some Description';

        $expected = $description;
        $layout->setDescription($description);
        $actual = $layout->getDescription();

        $this->assertSame($expected, $actual);
    }

    public function testFileName()
    {
        $layout = new Layout();
        $fileName = 'Some Filename';

        $expected = $fileName;
        $layout->setFilename($fileName);
        $actual = $layout->getFilename();

        $this->assertSame($expected, $actual);
    }

    public function testAction()
    {
        $layout = new Layout();
        $action = 'Some Action';

        $expected = $action;
        $layout->setAction($action);
        $actual = $layout->getAction();

        $this->assertSame($expected, $actual);
    }

    public function testContentId()
    {
        $layout = new Layout();
        $contentId = null;

        $expected = $contentId;
        $layout->setContentId($contentId);
        $actual = $layout->getContentId();

        $this->assertSame($expected, $actual);
    }

    public function testPlaceholders()
    {
        $layout = new Layout();
        $placeholders = array();

        $expected = $placeholders;
        $layout->setPlaceholders($placeholders);
        $actual = $layout->getPlaceholders();

        $this->assertSame($expected, $actual);
    }

    public function testPlaceholderKeys()
    {
        $layout = new Layout();
        $placeholderKeys = array();

        $expected = $placeholderKeys;
        $layout->setPlaceholderkeys($placeholderKeys);
        $actual = $layout->getPlaceholderkeys();

        $this->assertSame($expected, $actual);
    }

    public function testParameterSet()
    {
        $layout = new Layout();
        $parameterSet = 'Some Parameterset';

        $expected = $parameterSet;
        $layout->setParameterSet($parameterSet);
        $actual = $layout->getParameterSet();

        $this->assertSame($expected, $actual);
    }

    public function testParameters()
    {
        $layout = new Layout();
        $parameters = array();

        $expected = $parameters;
        $layout->setParameters($parameters);
        $actual = $layout->getParameters();

        $this->assertSame($expected, $actual);
    }
}