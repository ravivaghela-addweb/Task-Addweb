<h2>Program 82 :Read an array and Print Sum of its Elements</h2>
<?php
    $numbers = array(07, 11, 19 ,99, 10, 07, 19, 98);
    $sum = 0; 
    // $num = count($numbers);
    for($i = 1; $i < count($numbers); $i++)
    {
        $sum = $sum + $numbers[$i];
    }
    echo "<br/> Sum of an Array : $sum";
?>