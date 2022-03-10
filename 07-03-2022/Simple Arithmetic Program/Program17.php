<?php

    echo "Program 17 : Print the Sum of all Digits of a Digit Number<br/>";
    
    $digit = 10071998;
    echo "Digit = $digit";
  
    $sum = 0; 
    $reminder = 0;  
    for ($i = 0; $i <= strlen($digit); $i++)  
    {  
        $reminder = $digit % 10;  
        $sum = $sum + $reminder;  
        $digit = $digit / 10;  
    } 

    echo "<br/>Sum of Digits = $sum";  


?>