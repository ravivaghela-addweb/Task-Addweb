<h2>Program 63 : Print The GCD(Greatest Common Division) Number of Two Values</h2>
<form method="post">
	<label for="num1">Enter First Number : </label>
	<input type="text" name="number1" id="num1" required/><br/>
    <label for="num2">Enter Second Number : </label>
    <input type="text" name="number2" id="num2" required/><br/><br/>
	<input type="submit" value="Get GCD" name="submit" />
</form>
<?php
    if(isset($_POST["submit"]))
    {
        $n1 = $_POST["number1"]; 
        $n2 = $_POST["number2"];
        $GCD_Num;
        for( $i = 1; $i <= $n1 && $i <= $n2; ++$i)  
        {  
            if ($n1 % $i == 0 && $n2 % $i == 0)  
                $GCD_Num = $i;  
        }  
        echo " GCD of two numbers $n1 and $n2 is $GCD_Num";  
    }
?>  