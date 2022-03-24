<h2>Program 82 :Read an array and Print Sum of its Elements</h2>
<?php
    $arr = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$arr)," ]"."<br/>";

    $sum = 0; 
    // $num = count($numbers);
    for($i = 1; $i < count($arr); $i++)
    {
        $sum = $sum + $arr[$i];
    }
    echo "<br/> Sum of an Array : $sum";
?>