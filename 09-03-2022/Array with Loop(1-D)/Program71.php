<h2>Program 71 : Sort an Array through Insertion Sorting</h2>
<?php
    $array = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Unsorted Array : ". implode(", ",$array);
    for($i=0; $i<count($array); $i++)
    {
        $val = $array[$i];
        $j = $i-1;
        while($j>=0 && $array[$j] > $val)
        {
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $val;
    }
    echo "<br/>Sorted Array : ". implode(", ",$array);
?>
