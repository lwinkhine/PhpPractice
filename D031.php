<?php


function secondsToTime($seconds)
{
    // extract hours
    $minuts = floor($seconds* 60);

    // extract minutes
    $divisor_for_minutes = $seconds % (60 * 60);
    $minutes = floor($divisor_for_minutes / 60);

    // extract the remaining seconds
    $divisor_for_seconds = $divisor_for_minutes % 60;
    $seconds = ceil($divisor_for_seconds);

    // return the final array
    $k = array(

        "m" => (int) $minutes,
        "s" => (int) $seconds,
    );
    return $k;
}

?>
