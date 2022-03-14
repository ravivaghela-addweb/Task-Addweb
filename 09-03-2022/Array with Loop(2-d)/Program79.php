<h2>Program 79 : Print The Lower and Upper Half Triangles of a Matrix</h2>
<?php
    $a = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9));
        $m = count($a);
        $n = count($a[2]);
    
        echo "The Matrix :"."<br/>";
        for ($rows = 0; $rows < $m; $rows++) 
        {
            for ($cols = 0; $cols < $n; $cols++)
            echo " ".$a[$rows][$cols];
            echo "<br/>";
        }
    $rows = count($a);
    $cols = count($a[0]);
    if($rows != $cols)
    {
        echo("Matrix should be a Square Matrix</br>");
    }
    else
    {
        echo( "Lower Triangular Matrix: </br>");
        for($i = 0; $i < $rows; $i++)
        {
            for($j = 0; $j < $cols; $j++)
            {
                if($j > $i)
                    echo("0 ");
                else
                    echo($a[$i][$j] . " ");
            }
            echo("</br>");
        }
    }
    if($rows != $cols)
    {
        echo("Matrix should be a Square Matrix");
    }
    else
    {
        echo("Upper Triangular Matrix : </br>");
        for($i = 0; $i < $rows; $i++)
        {
            for($j = 0; $j < $cols; $j++)
            {
                if($i > $j)
                    echo("0 ");
                else
                    echo($a[$i][$j] . " ");
            }
            echo("</br>");
        }
    }


?>