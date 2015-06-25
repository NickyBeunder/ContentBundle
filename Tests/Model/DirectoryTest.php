<?php

namespace Opifer\ContentBundle\Tests\Model;

use Opifer\ContentBundle\Model\Directory;
use Mockery as m;
use Opifer\ContentBundle\Model\DirectoryInterface;

class DirectoryTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $directory = new Directory();
        $name = 'Some Name';

        $expected = $name;
        $directory->setName($name);
        $actual = $directory->getName();

        $this->assertSame($expected, $actual);
    }

    public function testLft()
    {
        $directory = new Directory();
        $lft = 1;

        $expected = $lft;
        $directory->setLft($lft);
        $actual = $directory->getLft();

        $this->assertSame($expected, $actual);
    }

    public function testLvl()
    {
        $directory = new Directory();
        $lvl = 1;

        $expected = $lvl;
        $directory->setLvl($lvl);
        $actual = $directory->getLvl();

        $this->assertSame($expected, $actual);
    }

    public function testRgt()
    {
        $directory = new Directory();
        $rgt = 1;

        $expected = $rgt;
        $directory->setRgt($rgt);
        $actual = $directory->getRgt();

        $this->assertSame($expected, $actual);
    }

    public function testRoot()
    {
        $directory = new Directory();
        $root = 1;

        $expected = $root;
        $directory->setRoot($root);
        $actual = $directory->getRoot();

        $this->assertSame($expected, $actual);
    }

    public function testsSlug()
    {
        $directory = new Directory();
        $slug = 'Some Slug';

        $expected = $slug;
        $directory->setSlug($slug);
        $actual = $directory->getSlug();

        $this->assertSame($expected, $actual);
    }
}