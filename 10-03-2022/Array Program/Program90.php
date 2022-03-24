<h2>Program 90 : Read an array and performe BINARY Search.</h2>
<?php
    $array = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$array)," ]"."<br/>";
    $n = sizeof($array);
    if (count($array) === 0) return false;
    $count = 0;
    $value = 10;
    if(isset($array[$value]))
    {
        for($i = 0; $i < $n; $i++)
        {
            $middle = $i + ($n - $i)/2;
            if($array[$middle] == $value)
            {
                $count++;
            }
            else if($array[$middle] < $value)
            {
                $i = $middle + 1;
                $count++;
            }
            else if($array[$middle] > $value)
            {
                $i = $middle - 1;
                $count++;
            }
        
        }
    }

    if($count == 1)
    {
        echo"$value Element not Present";
    }
    else
    {
        echo "$value Element Found";
    }

?>
