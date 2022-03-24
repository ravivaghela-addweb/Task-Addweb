<h2>Program 96 : Read an array and find out how many elements are prime</h2>
<?php

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	echo "Array 1 : [ ",implode(", ",$arr)," ]"."<br/>";
    $n = sizeof($arr);
	$max_val = max($arr);
	$prime = array_fill(0, $max_val + 1, true);
	$prime[0] = false;
	$prime[1] = false;
	for ($i = 2; $i * $i <= $max_val; $i++)
	{
		if ($prime[$i] == true)
		{
			for ($j= $i * 2;
				$j <= $max_val; $j += $i)
				$prime[$j] = false;
		}
	}
	$count = 0;
	for ($j = 0; $j < $n; $j++)
		if ($prime[$arr[$j]])
			$count++;

	echo "Total Number of Prime Numbers in this Array : $count";

?>