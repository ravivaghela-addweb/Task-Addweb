<h2>Program 105 : Read a 2D array and swap their elements</h2>
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
	for ($i = 0; $i < $n; $i++)
	{
		$t = $arr[0][$i];
		$arr[0][$i] = $arr[$rows - 1][$i];
		$arr[$rows - 1][$i] = $t;
	}
    echo "Swap Element:<br/>";
    for ($rows = 0; $rows < $m; $rows++) 
    {
        for ($cols = 0; $cols < $n; $cols++)
            echo " ".$arr[$rows][$cols];
            echo "<br/>";
    }


?>
