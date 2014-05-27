<?php

namespace FizzBuzz;

class FizzBuzz {

    public function devuelve($numero) {

        $devuelve = "";
        $numero2 = '' . $numero;


//|| $this->contieneNumero($numero2, '3') !== false))
        if ($this->esMultipleOcontieneNumero($numero, '3')) {
            $devuelve = $devuelve . "Fizz";
        }
        if ($this->esMultipleOcontieneNumero($numero, '5')) {
            $devuelve = $devuelve . "Buzz";
        }
//        if (($this->esMultiple($numero, '3') == true) ||
//                ($this->contieneNumero($numero2, '3') !== false)) {
//
//        }
//        }
//        if (($this->esMultiple($numero, '5') == true)
//                || ($this->contieneNumero($numero2, '5') !== false)) {
//            $devuelve = $devuelve . "Buzz";
//        }
        if (!empty($devuelve)) {
            $numero = $devuelve;
        }

        return $numero;
    }

    public function esMultipleOcontieneNumero($numero, $numeroContieneOMultiple) {
        $numero2 = '' . $numero;
        if ($this->esMultiple($numero, $numeroContieneOMultiple)) {
            return true;
        }
        if ($this->contieneNumero($numero2, $numeroContieneOMultiple)) {
            return true;
        }
        return false;
    }

    public function contieneNumero($numero, $numeroQueBuscar) {

        return strpos($numero, $numeroQueBuscar) !== false;
    }

//
////
    public function esMultiple($numero, $decualEsMultiple) {
        $resultado = $numero % $decualEsMultiple;
        if ($resultado == 0) {
            return true;
        } else {
            return false;
        }
    }

//put your code here
}
