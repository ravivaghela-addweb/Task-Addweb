<h2>Program 103 : Read a 2D array and find out maximum among each row</h2>
<?php
    $arr = array(
        array(1, 2, 10),
        array(4, 5, 3),
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
    $i = 0; $j;
    $max = 0;
    $res;
    while ($i < $m)
    {
       for ( $j = 0; $j < $n; $j++)
       {
           if ($arr[$i][$j] > $max)
           {
              $max = $arr[$i][$j];
           }
        }
        $res[$i] = $max;
        $max = 0;
        $i++;
    }
    for($i = 0; $i < $n; $i++)
    {
       printf("Largest element in row index %d is %d", $i, $res[$i]);
       echo "<br/>";
    }
?>