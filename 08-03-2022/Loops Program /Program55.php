<h2>Program 55 : Print the Sum of All The Even and Odd between Two given Numbers</h2>
<form method="post">
	<label for="num1">Enter First Number : </label>
	<input type="text" name="number1" id="num1" required/><br/>
    <label for="num2">Enter Second Number : </label>
    <input type="text" name="number2" id="num2" required/><br/><br/>
	<input type="submit" value="Get Sum of Between Entered Two Number" name="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
    $number1 = $_POST["number1"]; 
    $number2 = $_POST["number2"]; 
    $Even_Sum = 0; 
    $Odd_Sum = 0;
    
    for($i = $number1; $i <= $number2; $i++)
    {
        if ( $i%2 == 0 ) 
        {
            $Even_Sum = $Even_Sum + $i;
        }
        else
        {
            $Odd_Sum = $Odd_Sum + $i;
        }
    }
    echo "The Sum of Odd Numbers Between $number1 to $number2  = $Odd_Sum<br/>";
    echo "The Sum of Even Numbers Between $number1 to $number2 = $Even_Sum";
 
}
?>
