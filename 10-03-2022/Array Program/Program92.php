<h2>Program 92 : Read two array of same dimension and swap their elements index by index into third</h2>
<?php
        $arr1 = array(5, 9, 1, 3, 7);
        $arr2 = array(10, 4, 8, 6, 2);
        $n1 = sizeof($arr1);
        $n2 = sizeof($arr2);
        echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br/>";
        echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br/>";
        $i = 0; $j = 0; $k = 0;
        $arr3 = array();
        
        while ($i < $n1 && $j < $n2)
        {
            $arr3[$k++] = $arr1[$i++];
            $arr3[$k++] = $arr2[$j++];
        }
            
        for ($i = 0; $i < ($n1 + $n2); $i++)
            $arr3[$i];

        echo "Array 3 After Merging of Array 1 and Array 2 : ";
        echo "[ ",implode(", ",$arr3)," ]"."<br/>";
?>
