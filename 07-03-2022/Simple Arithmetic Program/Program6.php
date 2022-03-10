<?php 

    echo "Calculate the Percentage of a Student while marks of 5 Subjects are given <br />";
    $sub1 = 90;
    $sub2 = 95;
    $sub3 = 94;
    $sub4 = 98;
    $sub5 = 92;
    $sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;

    echo "Gujarati = $sub1 <br />";
    echo "Science = $sub2 <br />";
    echo "Maths = $sub3 <br />";
    echo "Computer = $sub4 <br />";
    echo "Hindi = $sub5 <br />";
    echo "Total Marks = $sum <br />";
    $percentage = $sum / 5;
    echo "Percentage of Total Marks = $percentage";


?>