<?php

function findMaxAndMin(...$values) 
{
    echo "Biggest number = ", max(array(...$values));
    echo " <br> ";
    echo " Smallest number = ", min(array(...$values));
}



findMaxAndMin(2, 4, 5, 7, 9, 15, 100);
