<h2>Program 102 : Read a 2D array and print its transpose</h2>
<?php

    $arr = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9));
    $rows = count($arr);
    $cols = count($arr[0]);
    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            $transpose[$i][$j] = 0;
            $transpose[$i][$j] = $arr[$j][$i];
        }
    }
    echo("Original matrix is: <br>");
    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            echo ($arr[$i][$j] . " ");
        }
        echo( "<br>");
    }
    echo( "Transpose of given matrix is:<br>"); 
    for($i = 0; $i < $cols; $i++)
    {
        for($j = 0; $j < $rows; $j++)
        {
            echo($transpose[$i][$j] . " ");
        }
        echo( "<br>");
    }
?>