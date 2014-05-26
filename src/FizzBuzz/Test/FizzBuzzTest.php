<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase {

    public function testSetup() {
        $this->assertTrue(true);
    }

    public function testElPrimerElementoEs1() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(1, $fizzBuzz->devuelve(1));
    }

    public function testElSegundoElementoEs2() {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(2, $fizzBuzz->devuelve(2));
    }

}
