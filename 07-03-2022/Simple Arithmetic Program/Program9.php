<?php 

    echo "Program 9 : Calculate the Time given in Seconds into Hours, Minutes and Seconds <br/>";

    $totalSeconds = 102030;
    echo "Total Number of Seconds = ".$totalSeconds;
    // $hours = floor($totalSeconds / 3600);
    // $minutes = floor(($totalSeconds % 3600) / 60);
    // $seconds = floor(($totalSeconds % 3600) % 60);

    $hours = floor($totalSeconds / (60 * 60));
    $totalSeconds -= $hours * (60 * 60);

    $minutes = floor($totalSeconds / 60);
    $totalSeconds -= $minutes * 60;

    $seconds = floor($totalSeconds);
    $totalSeconds -= $seconds;

    echo "<br/>Time = {$hours}h {$minutes}m {$seconds}s";

?>