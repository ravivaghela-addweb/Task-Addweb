<h3>Program 78 : Print a Matrix in its Transpose Form</h3>
<?php
    $array = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9));
    $m = count($array);
    $n = count($array[2]);
    echo "The Matrix :<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
        echo " ".$array[$rows][$cols];
        echo "<br/>";
    }

    echo "Transpose for The Matrix is :<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
            echo " ".$array[$cols][$rows];
            echo "<br/>";
    }
?>