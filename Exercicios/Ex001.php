<?php 


// 1 - Escreva uma função que receba um número 
// indeterminado de parâmetros(números) e retorne a média desses números.


function media(...$numbers) 
{


    $sum = array_sum($numbers);
    $count = count($numbers);
    $average = $sum / $count;

         return $average;
}

echo media(20, 30, 50);