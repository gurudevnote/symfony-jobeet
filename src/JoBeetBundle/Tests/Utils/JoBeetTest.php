<?php
// src/JoBeetBundle/Tests/Utils/JoBeetTest.php

namespace JoBeetBundle\Tests\Utils;
use JoBeetBundle\Utils\JoBeet;

class JoBeetTest extends \PHPUnit_Framework_TestCase
{
  public function testSlugify()
  {
    $this->assertEquals('sensio', JoBeet::slugify('Sensio'));
    $this->assertEquals('sensio-labs', JoBeet::slugify('sensio labs'));
    $this->assertEquals('sensio-labs', JoBeet::slugify('sensio   labs'));
    $this->assertEquals('paris-france', JoBeet::slugify('paris,france'));
    $this->assertEquals('sensio', JoBeet::slugify('  sensio'));
    $this->assertEquals('sensio', JoBeet::slugify('sensio  '));
    $this->assertEquals('n-a', JoBeet::slugify(''));
    if (function_exists('iconv'))
    {
      $this->assertEquals('developpeur-web', JoBeet::slugify('Développeur Web'));
    }
  }
}