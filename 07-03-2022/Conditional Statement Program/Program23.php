<h2>Program 23 : Check Number is a 4-Digit Number or Not</h2>
<form method="post">
    <label for="num">Enter Number :</label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    $temp = $number;
    $count = 0;
    while ($temp != 0) {
        $temp = round($temp / 10);
        ++$count;
    }

    if ($count == 4) {
        echo "Yes! $number Number is 4-digit Number";
    } else {
        echo "$number Number is not 4-digit Number";
    }
}
?>