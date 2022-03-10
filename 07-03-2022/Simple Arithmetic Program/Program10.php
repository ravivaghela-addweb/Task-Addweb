<?php 

    echo "Program 10 : Convert given Number of Days into Months & Days<br/>";

    $totalDays = 365;
    echo "Total Days = ".$totalDays ."<br/>";

    $month = floor($totalDays / 30);
    $days = floor($totalDays % 30);

    echo "Month - ".$month ." Days - ".$days;

?>