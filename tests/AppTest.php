<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app.php';

class AppTest extends PHPUnit_Framework_TestCase {
  function testAdd() {
    $this->assertEquals(3, add(1, 2));
    $this->assertEquals(0, add(2, -2));
    $this->assertEquals(5, add(5, 0));
  }
}
