<h2>Program 84 : Read an array and count total no of even and odd elements</h2>
<?php
    $arr = array(07, 11, 19, 99, 10, 07, 19, 98);
    echo "Array : [ ",implode(", ",$arr)," ]"."<br/>";
    $n = count($arr);
	$even_count = 0;		
	$odd_count = 0;			

	for( $i = 0 ; $i < $n; $i++)
	{
		if ($arr[$i] & 1 == 1)
			$odd_count ++ ;	
		else			
			$even_count ++ ;		
	}

	echo "Number of even elements : $even_count<br/>";
    echo "Number of odd elements : $odd_count";	
?>
