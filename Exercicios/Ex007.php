<?php

function validatingCPF($cpf) 
{
 

    // Verify if the fill is writed
if (empty($cpf)) 
     {
        return "CPF is invalid";
     }

    // Elimina possivel mascara
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    // Verify if the total of numbers if 11
    if (strlen($cpf) != 11) {
        return "CPF is invalid";
    }
    // Verify the sequences
    else if ($cpf == '00000000000' || 
         $cpf == '11111111111' || 
         $cpf == '22222222222' || 
         $cpf == '33333333333' || 
         $cpf == '44444444444' || 
         $cpf == '55555555555' || 
         $cpf == '66666666666' || 
         $cpf == '77777777777' || 
         $cpf == '88888888888' || 
         $cpf == '99999999999') {
        return "CPF is invalid";


        // CPF Digits Validator 
    } else 
    {   
    
        for ($t = 9; $t < 11; $t++) {
        
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return "CPF is invalid";
            }
        }

        return "CPF is valid"; 
    }
}
