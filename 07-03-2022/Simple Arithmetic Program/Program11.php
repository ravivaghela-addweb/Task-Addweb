<?php

     echo "Program 13 : Calculate the Simple Interest and Compound Interest<br/>";

     $principle = 500;
     $time = 12;
     $rate = 10;
     echo "Principle = ".$principle;
     echo "<br/>Time Period = ".$time." Months";
     echo "<br/>Rate of Interest = ".$rate."%";

     $simple = $principle * $time * $rate / 100;
     echo "<br/>Simple Interest = ".$simple;

     $amount = $principle * pow((1 + $rate / 100), $time);
     $compound = $amount - $principle;
     echo "<br/>Compound Interest = ".$compound ;

?>