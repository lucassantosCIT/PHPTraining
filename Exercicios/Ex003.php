<?php

// CONVERTER CELSIUS PARA FAHRENHEIT
// (X °C × 9/5) + 32 


function converting($degreesInCelsius){
    return ($degreesInCelsius*9/5) + 32;
   }


echo converting(30);
echo "F°";