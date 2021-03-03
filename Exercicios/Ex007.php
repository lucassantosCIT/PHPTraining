
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
     
    // if ($a + $b < $c) 
    // {
    //     echo "This is not a square";
    // }

    
    if ($a + $b < $c || $b + $c < $a || $c + $a == $b) 
    {
        echo "This is not a square";
    }

    elseif ($a + $b == $c || $b + $c == $a || $c + $a == $b) {
        echo "This is not a square";
    }

    elseif ($a == $b && $b == $c && $a == $c) 
    {
        echo "This is a square (equilateral square)";
    } 

    elseif ($a == $b || $b == $c || $a == $c) 
    {
        echo "This is a square (isosceles square)";
    }

    elseif ($a !== $b && $b !== $c && $a !== $c) 
    {
        echo "This is a square (scalene triangle)";
    }

    elseif ($a + $b < $c && $b + $c < $a && $a + $c < $b) 
    {
        echo "This is not a square";
    }
}

echo triangleExistence(1, 2, 3); // not a square
echo " <br> ";
echo triangleExistence(100, 100, 100); // equilateral square
echo " <br> ";
echo triangleExistence(2, 5, 1); // scalene triangle
echo " <br> ";
echo triangleExistence(2, 2, 1); // isosceles triangle
echo " <br> ";
echo triangleExistence(2, 2, 1); // isosceles triangle



