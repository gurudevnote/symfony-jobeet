<?php
// src/JoBeetBundle/Tests/Utils/JoBeetTest.php

namespace JoBeetBundle\Tests\Utils;
use JoBeetBundle\Utils\JoBeet;

class JoBeetTest extends \PHPUnit_Framework_TestCase
{
  public function testSlugify()
  {
    $this->assertEquals('sensio', Jobeet::slugify('Sensio'));
    $this->assertEquals('sensio-labs', Jobeet::slugify('sensio labs'));
    $this->assertEquals('sensio-labs', Jobeet::slugify('sensio   labs'));
    $this->assertEquals('paris-france', Jobeet::slugify('paris,france'));
    $this->assertEquals('sensio', Jobeet::slugify('  sensio'));
    $this->assertEquals('sensio', Jobeet::slugify('sensio  '));
    $this->assertEquals('n-a', Jobeet::slugify(''));
    $this->assertEquals('developpeur-web', Jobeet::slugify('D�veloppeur Web'));
  }
}