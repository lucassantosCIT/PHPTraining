<?php

function findMaxAndMin(...$values) 
{
    echo "Maior numero = ", max(array(...$values));
    echo " <br> ";
    echo " Menor numero = ", min(array(...$values));
}



findMaxAndMin(2, 4, 5, 7, 9, 15, 100);