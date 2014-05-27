<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase {

    private $fizzBuzz;

    protected function setUp() {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testSetup() {
        $this->assertTrue(true);
    }

    public function testElPrimerElementoEs1() {
        $this->assertEquals('1', $this->fizzBuzz->devuelve(1));
    }

    public function testElSegundoElementoEs2() {
        $this->assertEquals('2', $this->fizzBuzz->devuelve(2));
    }

    public function testElTercerElementoEsFizz() {
        $this->assertEquals('Fizz', $this->fizzBuzz->devuelve(3));
    }

    public function testElQuintoElementoEsBuzz() {
        $this->assertEquals('Buzz', $this->fizzBuzz->devuelve(5));
    }

    public function testElQuinceaboElementoEsFizz() {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->devuelve(15));
    }

    public function testElTrintaiUnoElementoEsFizz() {
        $this->assertEquals('Fizz', $this->fizzBuzz->devuelve(31));
    }

}
