<?php

/** 
 * Create a new class called Fibonacci.
 * This class is responsible for calculating the Fibonacci sequence until a given position number (limit).
 * Aditional Notes:
 * - Must have a constructor.
 * - Must store the result as an array on an accessible property.
 * - Must have a non accessible method which contains the code to calculate the fibonacci sequence.
 */

class Fibonacci 
{
    public $result;

    function __construct($number) {
        
        if(is_null($number)){
            throw new InvalidArgumentException("Argument must not be null.");
        }

        if($number < 0){
            throw new InvalidArgumentException("Argument must be greater than zero.");
        }

        $this->result = $this->calculate($number);
    }

    /**
     *
     * Calculates the fibonacci sequence until a given position number
     *
     * @param integer $number The limit number for the fibonacci sequence
     * @return mixed array
     *
     */
    private function calculate($number) {

        if($number == 0){
            return array(0);
        }

        if($number == 1){
            return array(0, 1);
        }

        $fibonacci = array(0, 1);

        for ($i = 2; $i <= $number; ++$i) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci;
    }
}

/**
 * Main function (entry point)
 */
function main(){
    $number = 10;
    if(isset($_GET['number'])){
        $number = $_GET['number'];
    }

    $fibonacci = new Fibonacci($number);
    //print_r($fibonacci->result);
    header('Content-Type: application/json', true);
    echo json_encode($fibonacci->result);
}

main();
