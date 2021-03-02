<?php

function validatingCPF($cpf) {
 
        // CREDITS FOR THE CPF FORMULA CODE: RAFAEL-NERI (GITHUB)
    // Verify if there are the total of 11 numbers
    if (strlen($cpf) != 11) {
        return " CPF is invalid";
    }

    // Calculating CPF's validation
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return "CPF in invalid";
        }
    }
    return " CPF is valid";

}
