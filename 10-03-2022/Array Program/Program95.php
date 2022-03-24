<h2>Program 95 : Read an array and check whether its elements are stored In Palindrome form or not</h2>
<?php

    $arr = array(121, 131, 353);
	echo "Array 1 : [ ",implode(", ",$arr)," ]"."<br/>";
    $n = count($arr);
	$j; $flag = 0;
	for($i = 0, $j = $n-1; $i< $n/2, $j >= $n/2; $i++, $j--) 
	{
		if($arr[$i] != $arr[$j]) 
		{
			$flag = 1;
			break;
		}
	} 
	if($flag == 1)
		printf("Array is Pallindrome");
	else
		printf("Array is not Pallindrome");
?>