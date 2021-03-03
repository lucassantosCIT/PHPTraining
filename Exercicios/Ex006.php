<?php

function findDay($choosenDay) 
{

    $days = array(
    1 => 'sunday',
    2 => 'morning',
    3 => 'tuesday',
    4 => 'wednesday',
    5 => 'thursday',
    6 => 'friday',
    7 => 'saturday'
    );


    if ($choosenDay>7) {
        return "Invalid Day";
    }

    foreach ($days as $listDays) {
        return $days[$choosenDay];

    }

}
    // Parameter is the number of the day
echo "The choosen day is " ,findDay(4);


