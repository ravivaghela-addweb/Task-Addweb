<h2>Program 74 : Input two arrays and then put them into another (3rd array) After Sorting.</h2>
<?php
        $arr1 = array(5, 9, 1, 3, 7);
        $arr2 = array(10, 4, 8, 6, 2);
        $n1 = sizeof($arr1);
        $n2 = sizeof($arr2);
        echo "Array 1 : [ ",implode(", ",$arr1)," ]"."<br/>";
        echo "Array 2 : [ ",implode(", ",$arr2)," ]"."<br/>";
        $arr3[$n1 + $n2] = array();
        $x = 0;
        $y = 0;
        $z = 0;
        for($i=0; $i<count($arr1); $i++)
        {
            $val = $arr1[$i];
            $j = $i-1;
            while($j>=0 && $arr1[$j] > $val)
            {
                $arr1[$j+1] = $arr1[$j];
                $j--;
            }
            $arr1[$j+1] = $val;
        }
        for($i=0; $i<count($arr2); $i++)
        {
            $val = $arr2[$i];
            $j = $i-1;
            while($j>=0 && $arr2[$j] > $val)
            {
                $arr2[$j+1] = $arr2[$j];
                $j--;
            }
            $arr2[$j+1] = $val;
        }
        while ($x < $n1 && $y < $n2)
        {
            if ($arr1[$x] < $arr2[$y])
                $arr3[$z++] = $arr1[$x++];
            else
                $arr3[$z++] = $arr2[$y++];
        }

        while ($x < $n1)
            $arr3[$z++] = $arr1[$x++];

        while ($y < $n2)
            $arr3[$z++] = $arr2[$y++];

        echo "Array After Merging : [ ";
        for ($a = 0; $a < $n1 + $n2; $a++)
            // echo $arr3[$a] . " ";
            echo $arr3[$a],", ";
        echo " ]";
?>
