<h2>Program 22 : Check Number is Armstrong or Not</h2>
<form method="post">
    <label for="num">Enter Number :</label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $number = $_POST['number'];
    $temp = $number;
    $num  = 0;
    while ($temp != 0) {
        $rem = $temp % 10;
        $num = $num + ($rem * $rem * $rem);
        $temp = $temp / 10;
    }

    if ($number == $num) {
        echo "Yes $number Number an Armstrong Number";
    } else {
        echo "$number is not an Armstrong Number";
    }
}
?>