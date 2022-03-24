<h2>Program 104 : Read a 2D array and find out maximum among its diagonal elements</h2>
<?php
    $arr = array(
        array(1, 2, 10),
        array(4, 5, 3),
        array(7, 8, 9));
    $m = count($arr);
    $n = count($arr[0]);
    echo "The Matrix :<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
        echo " ".$arr[$rows][$cols];
        echo "<br/>";
    }
	$Max = $arr[0][0];
    
    
	for ($i = 1; $i < $n; $i++)
	{
		for ($j = 1; $j < $n; $j++)
		{
			if ($i == $j)
			{
				if ($arr[$i][$j] > $Max)
				{
					$Max = $arr[$i][$j];
				}
			}
		}
	}

	echo "Diagonal Greatest Element : $Max";



?>
