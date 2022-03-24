<h2>Program 94 : Read an array and print sum of elements stored at even indexes</h2>
<?php
    $arr = array( 1, 2, 3, 4, 5, 6 );
    echo "Array 1 : [ ",implode(", ",$arr)," ]"."<br/>";
    $n = sizeof($arr);
    $even = 0;
    for ($i = 0; $i < $n; $i++)
    {
        if ($i % 2 == 0)
            $even += $arr[$i];
    }

    echo "Even Index Positions Sum : $even";
    
?>