<h2>Program 85 : Read an array and find our max and second max </h2>
<?php
    $array = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$array)," ]"."<br/>";
    $max = 0;
    $max2 = 0;
    for ($i = 0; $i < count($array); $i++) 
    {
        if ($array[$i] > $max) 
        {
            $max2 = $max;
            $max = $array[$i];
        } else if (($array[$i] > $max2) && ($array[$i] != $max)) 
        {
            $max2 = $array[$i];
        }
    }
    echo "Highest Value is : $max<br/>";
    echo "Second Maximum Number : $max2";
?>