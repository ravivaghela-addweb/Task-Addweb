<?php

    echo "Program 15 : Input a 4-digit Number and Print its Entire Digits Individual<br/>";
    
    $number = 1998;
    echo "4-Digit Number = $number<br/>";
    $digit1=$number/1000%10;  
    $digit2=$number/100%10;  
    $digit3=$number/10%10;  
    $digit4=$number%10;   

    echo $digit1."<br/>".$digit2."<br/>".$digit3."<br/>".$digit4;

    // $digit;
    // $count=0;
    // $temp = $number;  
    
    // while($number > 0)  
    // {    
    //     $number = $number/10;  
    //     $count++;  
    // }  
    // while($temp > 0)  
    // {  
    //     $digit = $temp % 10;  
    //     echo "Digit at Place $count is = $digit";  
    //     $temp = $temp/10;  
    //     $count--;  
    // }   
    
    
    
?>