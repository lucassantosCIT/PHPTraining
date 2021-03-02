
<?php

// 7 - Faça um Programa que peça os 3 lados de um triângulo. 
 // O programa deverá informar se os valores podem ser um triângulo. Indique, 
  //caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.
   // - Dicas:
    //  - Três lados formam um triângulo quando a soma de quaisquer dois lados for maior 
    // que o terceiro;
     // - Triângulo Equilátero: três lados iguais;
      // - Triângulo Isósceles: quaisquer dois lados iguais;
       // - Triângulo Escaleno: três lados diferentes;

      

function triangleExistence($a, $b, $c) 
{
        
    if ($a == $b && $b == $c && $a == $c) {
        echo "This is a square (equilateral square)";
    } 

    if ($a == $b || $b == $c || $a == $c) {
        echo "This is a square (isosceles square)";
    }

    if ($a !== $b && $b !== $c && $a !== $c) {
        echo "This is a square (scalene triangle)";
    }

    if ($a + $b < $c && $b + $c < $a && $a + $c < $b) {
        echo "This is not a square";
    }
}

echo triangleExistence(6, 6, 10); // isosceles square
echo " <br> ";
echo triangleExistence(100, 10, 10); // equilateral square
echo " <br> ";
echo triangleExistence(2, 5, 1); // scalene triangle