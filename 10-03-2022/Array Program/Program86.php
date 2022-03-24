<h2>Program 86 : Read an array and find out max and min.</h2>
<?php
    $array = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$array)," ]"."<br/>";
    $n = count($array);
    $max = $array[0];
    $min = $array[0];
    for ($i = 0; $i < $n; $i++)
        if ($max < $array[$i])
            $max = $array[$i];
    echo "Maximum Number : $max<br/>";	
    for ($i = 0; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    echo "Minimum Number : $min";	
?>