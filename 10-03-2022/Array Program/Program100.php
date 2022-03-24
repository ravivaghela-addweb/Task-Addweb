<h2>Program 100 : Read a 2D array and print sum of its diagonal elements</h2>
<?php
    $arr = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9));
    $m = count($arr);
    $n = count($arr[0]);
    $sum = 0;
    echo "The Matrix :<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
        echo " ".$arr[$rows][$cols];
        echo "<br/>";
    }
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < count($arr[0]); $j++) 
        {
            if ($i == $j) 
            {
                $sum += $arr[$i][$j];
            }
            if ($i + $j == $n - 1) 
            {
                $sum += $arr[$i][$j];
            }
        }
    }
    echo "Sum of Its Diagonal Elements : $sum";
