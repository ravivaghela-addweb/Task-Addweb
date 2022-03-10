<h2>Program 51 : Print Fibonacci Series</h2>
<form method="post">
	<label for="num">Enter Number : </label>
	<input type="text" name="number" id="num" required/><br/></br/>
	<input type="submit" value="Get Series" name="submit" />
</form>  
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $number = $_POST["number"];
    $first = 0;
    $second = 1;
    echo "$number Fibonacci Series : ";
    echo "$first, ";
    echo "$second, ";
    for($i = 3; $i <= $number; $i++) {
        $third = $first + $second;
        $first = $second;
        $second = $third;
        echo "$third, "; 
    }
}
?>