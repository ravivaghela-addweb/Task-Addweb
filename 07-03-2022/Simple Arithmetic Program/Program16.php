<?php

    echo "Program 16 : Reverse a Digit Number<br/>";

    $digit = (int)10071998;
    $reverse = 0;
    echo "Original Digit = $digit";
  
    $x = 0;
    
    while(floor($digit))
    {  
        $modulus = $digit%10;
        $reverse = ($reverse * 10) + $modulus;  
        $digit = $digit / 10;
    }  
    echo "<br/>Reversed Digit = $reverse";
    


?>