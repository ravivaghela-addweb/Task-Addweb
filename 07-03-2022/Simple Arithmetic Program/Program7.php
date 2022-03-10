<?php

    echo "Program 7 : Calculate the Roots of a Quadratic Equation<br/>";

    $a = 5; 
    $b = 4;
    $c = 0;

        if ($a == 0) 
        { 
            echo "Invalid"; 
            return; 
        } 
    
        $d = $b * $b - 4 * $a * $c; 
        $sqrt_val = sqrt(abs($d)); 
    
        if ($d > 0) 
        { 
        echo "Roots are real and ".  
                    "different "; 
        echo (-$b + $sqrt_val) / (2 * $a) , " ",  
             (-$b - $sqrt_val) / (2 * $a); 
        } 
        else if ($d == 0) 
        { 
            echo "Roots are real and same"; 
            echo -$b / (2 * $a); 
        } 
        else 
        { 
            echo "Roots are complex"; 
            echo -$b / (2 * $a) , " + i" ,  
            $sqrt_val, "" , -$b / (2 * $a),
            " - i", $sqrt_val; 
        } 

?>