<h2>Program 89 : Read an Array and Perform Linear Search</h2>
<?php
	$array = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$array)," ]"."<br/>";
    $n = count($array);
    $num = 10;
    $result = 0;
    // $n = sizeof($array);
    for($i = 0; $i < $n; $i++)
    {
        if($array[$i] == $num)
            $result = $i;
            
    }
    if(!$result==0)
        echo "$num Element is Present at Index : $result";
    else
        echo "$num Element is not Present in Array"; 

?>
