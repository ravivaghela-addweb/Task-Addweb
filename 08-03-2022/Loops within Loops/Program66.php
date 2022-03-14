<h2>Program 66 : Print all The Palindrome Numbers among 1 to n </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br /><br/>
    <input type="submit" value="Get Palindrome Numbers" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $number = $_POST["number"];
    echo "Pelindrome Numbers 1 to $number : ";
    for($i = 1; $i <= $number; $i++)
    {
        $n = $i;
        $reverse = 0;
        while($n>0)
        {
            $remainder = $n % 10;
            $reverse = ($reverse * 10) + $remainder;
            $n = ($n - $remainder)/10;
        }
        if($i == $reverse)
        echo "$i ";
    }
    
}
?>