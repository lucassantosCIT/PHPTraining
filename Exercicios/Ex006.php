<?php

function findDay($choosenDay) 
{

    $days = array(
    1 => 'domingo',
    2 => 'segunda',
    3 => 'terça',
    4 => 'quarta',
    5 => 'quinta',
    6 => 'sexta',
    7 =>' sabado'
    );

    foreach ($days as $listDays) {
        return $days[$choosenDay];

    }


}
    // Parameter is the number of the day
echo findDay(5);


