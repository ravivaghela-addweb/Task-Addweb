<h2>Program 68 : Find The Sum of Digits of an Integer Number </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br /><br/>
    <input type="submit" value="Get Sum of Digit" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $number = $_POST["number"];
    $temp = $number;
    $rem = 0;
    $sum = 0;
    while($number > 1)
    {
        $rem = $number % 10;
        $sum = $sum + $rem;
        $number = $number/10;
    }
    echo "Sum of digits of given number $temp is : $sum";
}
?>