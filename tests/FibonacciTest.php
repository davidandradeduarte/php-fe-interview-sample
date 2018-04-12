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
   // ...
}
