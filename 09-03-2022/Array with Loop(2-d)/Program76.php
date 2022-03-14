<h3>Program 76 : Compute the Addition/Subtraction of 2 Matrixs</h3>
<?php

    $array1 = array(
        array(5, 8, 7),
        array(5, 6, 4),
        array(3, 9, 6));

    $array2 = array(
        array(1, 1, 1),
        array(2, 3, 1),
        array(1, 5, 1));
    $m = count($array1);
    $n = count($array1[2]);
    $p = count($array2);
    $q = count($array2[2]);
    echo "The First Matrix :"."<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
        echo " ".$array1[$rows][$cols];
        echo "<br/>";
    }
    echo "The Second Matrix :"."<br/>";
    for ($rows = 0; $rows < $p; $rows++) 
    {
        for ($cols = 0; $cols < $q; $cols++)
        echo " ".$array2[$rows][$cols];
        echo "<br/>";
    }
    
    $rows = count($array1);
    $cols = count($array1[0]);
    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            $diff[$i][$j] = 0; 
            $diff[$i][$j] = $array1[$i][$j] - $array2[$i][$j];
        }
    }
    echo ("Subtraction of Two Matrices : <br/>");

    for($i = 0; $i < $rows; $i++)
    {
        for($j = 0; $j < $cols; $j++)
        {
            echo$diff[$i][$j] . " ";
            echo "&nbsp;";
        }
        echo "<br>";
    }
    echo "the addition of matrices is:"."<br/>";
    for ($rows = 0; $rows < 3; $rows++) 
    {
        for ($cols = 0; $cols < 3; $cols++)
            echo " ".$array1[$rows][$cols]+$array2[$rows][$cols]." ";
            echo "<br/>";
    }
?>