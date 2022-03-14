<h2>Program 58 : Find The Number of Sum 
    which all Integers Greater than 100 and Less than 200 
    that are Divisible by 7.
</h2>
<form method="post">
    <label for="num1">Enter Greater Than Number : </label>
	<input type="text" name="number1" id="num1" required/><br/>
    <label for="num2">Enter Less Than Number : </label>
	<input type="text" name="number2" id="num2" required/><br/>
	<label for="num3">Enter Number that Divide : </label>
	<input type="text" name="number3" id="num3" required/><br/></br/>
	<input type="submit" value="Calculate" name="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    $sum = 0;
    printf("Numbers Between $number1 and $number2 that Divisible by $number3 : ");
    for($i = $number1 + 1 ; $i < $number2; $i++)
    {
        if($i%$number3 == 0)
        {
           printf("$i, ");
           $sum = $sum + $i;
        }
    }
    printf("<br/>The sum : $sum");
}
?>
