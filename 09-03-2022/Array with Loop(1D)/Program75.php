<h2>Program 75 : Reverse an array without using another array.</h2>

<?php
    $arr = array(3, 4, 5, 4, 9, 2, 4, 5, 3);
    echo "Original Array : ". implode(" ",$arr);
    $len = count($arr);
    for($i=0; $i<$len/2; $i++)
    {
        $temp = $arr[$i];
        $arr[$i] = $arr[$len-$i-1];
        $arr[$len-$i-1] = $temp;
    }
    echo "<br/>";
    echo "Reverse Array : ".implode(" ",$arr);

?>