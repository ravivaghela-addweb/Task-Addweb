<h2>Program 80 : Compute the Sum of Row and Column Elements.</h2>
<?php
    $arr = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9));
        $m = count($arr);
        $n = count($arr[2]);
        $sum = 0;

        echo "The Matrix :"."<br/>";
        for ($rows = 0; $rows < $m; $rows++) 
        {
            for ($cols = 0; $cols < $n; $cols++)
            echo " ".$arr[$rows][$cols];
            echo "<br/>";
        }
        echo "Finding Sum of each row : <br/>";
        echo "=======================<br/>";
        for ($i = 0; $i < $m; ++$i)
        {
            for ($j = 0; $j < $n; ++$j)
            {
                $sum = $sum + $arr[$i][$j];
            }
            echo "Sum of the row $i = $sum<br/>";
            $sum = 0;
        }
        echo "==========================<br/>";
        echo "Finding Sum of each column :<br/>";
        echo "==========================<br/>";
        for ($i = 0; $i < $m; ++$i)
        {
            for ($j = 0; $j < $n; ++$j)
            {
                $sum = $sum + $arr[$j][$i];
            }

            echo "Sum of the column $i = $sum<br/>";
            $sum = 0;
        }
        echo "==========================<br/>";

?>
