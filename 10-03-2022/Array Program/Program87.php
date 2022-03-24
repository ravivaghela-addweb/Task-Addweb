<h2>Program 87 : Read an array and count Total no of Positive, Megative and zero Elements</h2>
<?php
    $array = array(0, -11, 19 ,99, -10, 0, 19, 98);
    echo "Array : [ ",implode(", ",$array)," ]"."<br/>";
    $n = count($array);
    $pos = 0;
    $neg = 0;
    $zero = 0;
    for($i = 0; $i < $n; $i++){
        if($array[$i] == 0)
            $zero++;
        else if($array[$i] < 0)
            $neg++;
        else
            $pos++;
    }
    echo "Total Number of Zero Element : $zero<br/>";
    echo "Total Number of Negative Element : $neg<br/>";
    echo "Total Number of Positive Element : $pos";
?>