<h2>Program 98 : Read a 2D array and print sum of its individual rows</h2>
<?php
    $arr = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9));
    $m = count($arr);
    $n = count($arr[0]);
    echo "The Matrix :<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
        echo " ".$arr[$rows][$cols];
        echo "<br/>";
    }

    for($i = 0; $i < $rows; $i++)
    {  
        $sumRow = 0;  
        for($j = 0; $j < $cols; $j++)
        {  
            $sumRow = $sumRow + $arr[$i][$j];  
        }  
        print("Sum of " . ($i+1) ." row : " . $sumRow);  
        print("<br>");  
    }  

?>