<h2>Program 88 : Read an array and count no of element which are divisible by 5</h2>
<?php
    $array = array(7, 7, 11, 13, 99, 10, 20, 15, 25, 98);
    echo "Array : [ ",implode(", ",$array)," ]"."<br/>";
    $n = count($array);
    $result = 0;
    $d = 5;
    // $zero = 0;

    for($i = 0; $i < $n; $i++){
        if ($array[$i] % $d == 0)
            $result++;
        // if($array[$i] == 0)
        //     $zero++;
    }
    // if($zero < 0)
    //     echo "Zero is Not Dividible Number. Total Zero Numbers : $zero";
    // else
        echo "Total Numbers  to Divisibble by $d number in This an Array : $result";
?>