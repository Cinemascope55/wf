<?php
// getAllMondaysOfMonth :

//Start function getAllMondaysOfMonth
//  Given we have an argument for specify the year
//  Given we have an argument for specify the month */

function getAllMondaysOfMonth(int $year, int $month) : array {
    $mondays = []; // <- list of mondays

    //Get the first day of the specified month of the specified year
    $date = Datetime::createFromFormat('Yn', $year.$month);
    $date = new DateTime('first day of'.$date->format('F Y'));

    $interval = DateInterval::createFromDateString('next monday');
    // If the first day is not a monday
    // (N = Number of the day of a week
    // 0 = Sunday - 6 = Sathurday
    if ($date->format('N') != 1) {
        //Add an interval to next monday
        $date->add($interval);
    }

    while ($date->format('m') == $month) {
        $mondays[] = $date->format('l j, M Y');
        $date->add($interval);
    }

    return $mondays;
}

