<?php

/**
 * Unit tests
 * Write some unit tests to cover the code you implemented
 */
use PHPUnit\Framework\TestCase;

function __autoload($class_name) {
    require_once '../src/' . $class_name . '.php';
}

class FibonacciTest extends TestCase
{
    public function testConstructor_ReturnsValidFibonacciSequence_WhenValidNumberIsPassed() {
        // Arrange
        $number = 10;
        $sequence = array(0,1,1,2,3,5,8,13,21,34,55);

        // Act
        $fibonacci = new Fibonacci($number);

        // Assert
        $this->assertEquals($sequence, $fibonacci->result);
    }

    public function testConstructor_ThrowsInvalidArgumentException_WhenNullIsPassed() {
        
        // Arrange/Assert
        $number = null;
        $this->setExpectedException(InvalidArgumentException::class);

        // Act
        $fibonacci = new Fibonacci($number);
    }

    public function testConstructor_ThrowsInvalidArgumentException_WhenNegativeNumberIsPassed() {
        
        // Arrange/Assert
        $number = -5;
        $this->setExpectedException(InvalidArgumentException::class);

        // Act
        $fibonacci = new Fibonacci($number);
    }
    
    public function testConstructor_ReturnsArrayWith0_WhenNumber0IsPassed() {
        // Arrange
        $number = 0;
        $sequence = array(0);

        // Act
        $fibonacci = new Fibonacci($number);

        // Assert
        $this->assertEquals($sequence, $fibonacci->result);
    }

    public function testConstructor_ReturnsArrayWith0And1_WhenNumber1IsPassed() {
        // Arrange
        $number = 1;
        $sequence = array(0,1);

        // Act
        $fibonacci = new Fibonacci($number);

        // Assert
        $this->assertEquals($sequence, $fibonacci->result);
    }
    
    // ...
}
