<?php

namespace FizzBuzz;

class FizzBuzz {

    public function devuelve($numero) {

        $devuelve = "";


        if ($this->esMultipleOcontieneNumero($numero, '3')) {
            $devuelve = $devuelve . "Fizz";
        }
        if ($this->esMultipleOcontieneNumero($numero, '5')) {
            $devuelve = $devuelve . "Buzz";
        }

        if (!empty($devuelve)) {
            $numero = $devuelve;
        }

        return $numero;
    }

    public function esMultipleOcontieneNumero($numero, $numeroContieneOMultiple) {
        return $this->esMultiple($numero, $numeroContieneOMultiple) ||
                $this->contieneNumero($numero, $numeroContieneOMultiple);
    }

    public function contieneNumero($numero, $numeroQueBuscar) {
        $numero2 = '' . $numero;

        return strpos($numero2, $numeroQueBuscar) !== false;
    }

    public function esMultiple($numero, $decualEsMultiple) {
        $resultado = $numero % $decualEsMultiple;
        return $resultado == 0;
    }

}
