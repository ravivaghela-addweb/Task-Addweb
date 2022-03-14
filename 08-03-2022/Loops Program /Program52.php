<h2>Program 52 : Compute Square Root using Iteration (without using sqrt( ) library function)</h2>
<form method="post">
	<label for="num">Enter Number : </label>
	<input type="text" name="number" id="num" required/><br/></br/>
	<input type="submit" value="Get Square Root" name="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
    $number = $_POST["number"];
    $temp ;
    $sqrt;
    // echo "Entered Number = $number";

    $sqrt = $number / 2;
    $temp = 0;
    while($sqrt != $temp)
    {
        $temp = $sqrt;
        $sqrt = ( $number/$temp + $temp) / 2;
    }

    echo "The Square Root of $number = $sqrt";
}
?>
