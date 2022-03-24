<h2>Program 83 : Read an array and print its reverse</h2>
<?php
    $arr = array(07, 11, 19, 99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$arr)," ]"."<br/>";
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