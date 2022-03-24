<h2>Program 91 : Read two array of same dimension and swap their elements</h2>
<?php
    $arr1 = array(5, 9, 1, 3, 7);
    $arr2 = array(10, 4, 8, 6, 2);
    $n1 = sizeof($arr1);
    $n2 = sizeof($arr2);
    echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br/>";
    echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br/>";
    for($i = 0; $i < $n1; $i++)
    {
        $arr1[$i] = $arr1[$i] + $arr2[$i];
        $arr2[$i] = $arr1[$i] - $arr2[$i];
        $arr1[$i] = $arr1[$i] - $arr2[$i];
    }
    for($i = 0; $i < $n1; $i++)
    {
        $arr1[$i];
    }
    echo "First Array after Swapping elements :- ";
    echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br/>";
    
    for($i = 0; $i < $n2; $i++)
    {
        $arr2[$i];
    }
    echo "Second Array after Swapping elements :- ";
    echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br/>";

?>