<?php

namespace FizzBuzz;

class FizzBuzz {

    public function devuelve($numero) {
        $devuelve = "";
        $numero2 = '' . $numero;
        if (($numero % 3 == 0) || (strpos($numero2, '3') !== false)) {
            $devuelve = "Fizz";
        }
        if (($numero % 5 == 0) || (strpos($numero2, '5') !== false)) {
            $devuelve = $devuelve . "Buzz";
        }
        if (!empty($devuelve)) {
            $numero = $devuelve;
        }

        return $numero;
    }

//put your code here
}
