<h2>Program 67 : Print all The Armstrong Numbers Between The Range of Integer. </h2>
<form method="post">
    <label for="num1">Enter Minimum Number : </label>
    <input type="text" name="number1" id="num1" required /><br />
    <label for="num2">Enter Maximum Number : </label>
    <input type="text" name="number2" id="num2" required /><br /><br/>
    <input type="submit" value="Get Palindrome Numbers" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $min = $_POST["number1"];
    $max = $_POST["number2"];
    echo "Armstrong Numbers $min to $max : ";
	for($i = $min; $i <= $max; $i++)
	{
        $n = $i;
		$sum = 0;
		$len = strlen($i); 
		while($n > 0)
        {			
		    $rem = $n % 10;
			$power = pow($rem,$len);
			$sum = $sum + $power; 
			$n = $n/10;  
		}
		if($sum == $i)
		{
			echo "$i ";
        }
    }		
}
?>