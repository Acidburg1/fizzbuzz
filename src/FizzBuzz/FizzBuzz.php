<?php

namespace FizzBuzz;

class FizzBuzz {

    public function devuelve($numero) {
        $devuelve = "";

        if ($numero % 3 == 0) {
            $devuelve = "Fizz";
        }
        if ($numero % 5 == 0) {
            $devuelve = $devuelve . "Buzz";
        }
        if (!empty($devuelve)) {
            return $devuelve;
        }

        return $numero;
    }

    //put your code here
}
