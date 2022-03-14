<h2>Program 53 : Input a Number into Decimal Number and then Print its Equivalent Binary</h2>
<form method="post">
	<label for="num">Enter Decimal Number: </label>
	<input type="text" name="number" id="num" required/><br/></br/>
	<input type="submit" value="Get Binary" name="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
    $temp = $_POST["number"];
    $number = $temp;
    $binaryNumber;
    $rem = 0;
    while ($number > 0)
    {
 
        $binaryNumber[$rem] = $number % 2;
        $number = (int)($number / 2);
        $rem++;
    }
    echo "$temp Decimal Number into Binary number = ";
    
    for ($j = $rem - 1; $j >= 0; $j--)
        echo $binaryNumber[$j];

}
?>
