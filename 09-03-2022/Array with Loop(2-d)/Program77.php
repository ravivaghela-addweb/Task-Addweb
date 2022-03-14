<h3>Program 77 : Compute the Multiplication of 2 Matrixs</h3>
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
    
    echo " The Multiplication of Matrices: <br/>";
    $result=array();
    for ($i=0; $i < $m; $i++) 
    {
        for($j=0; $j < $q; $j++)
        {
            $result[$i][$j] = 0;
            for($k=0; $k < $n; $k++)
                $result[$i][$j] += $array1[$i][$k] * $array2[$k][$j];
        }
    }
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $q; $cols++)
        {
            echo " ".$result[$rows][$cols];
        }
        echo "<br/>";
    }
?>