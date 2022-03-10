<h2>Program 50 : Check Whether a Number is Armstrong or Not</h2>
<form method="post">
	<label for="num">Enter Number : </label>
	<input type="text" name="number" id="num" required/><br/></br/>
	<input type="submit" value="Check" name="submit" />
</form>  
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $number = $_POST['number'];   
    $temp = $number;  
    $num  = 0;  
    while( $temp != 0 )  
    {  
        $rem = $temp % 10;  
        $num = $num + ( $rem * $rem * $rem );   
        $temp = $temp / 10; 
    }  
            
    if( $number == $num )  
    {  
        echo "Yes $number an Armstrong Number";  
    }
    else  
    {  
        echo "$number is not an Armstrong Number";  
    }     
}
?>