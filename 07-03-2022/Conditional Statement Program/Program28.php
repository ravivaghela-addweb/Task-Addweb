<h2>Program 28 : Check Number is Odd Number or Even Number Using Ternary Operator</h2>
<form method="post">
    <label for="num">Enter Number :</label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    $number = $_POST["number"];
    echo "Entered Number : $number";
    $result = ($number % 2 == 0) ?
        "$number is Even Number" : "$number is Odd Number";

    // echo "<br/>$number is $result";
    echo "<br/>$result";
}
?>