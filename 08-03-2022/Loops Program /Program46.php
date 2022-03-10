<h2>Program 46 : Find Second Maximum Number out of 3-Numnbers</h2>
<form method="post">
    <label for="num1">Enter First Number :</label>
    <input type="text" name="number1" id="num1" required /><br />
    <label for="num2">Enter Second Number :</label>
    <input type="text" name="number2" id="num2" required /><br />
    <label for="num3">Enter Third Number :</label>
    <input type="text" name="number3" id="num3" required /><br />
    <input type="submit" value="Find" name="submit" />
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $num3 = $_POST["number3"];
    // $arr = [(int)$_POST["number1"],(int)$_POST["number2"],(int)$_POST["number1"]];
    echo "You Entered 3 Numbers = $num1 $num2 $num3<br/>";
    $arr = array($num1, $num2, $num3);
    if (empty($arr)) {
        return;
    }
    $max = -1;
    $secondMax = -1;
    foreach ($arr as $number) {
        if ($number > $max) {
            $secondMax = $max;
            $max = $number;
        }
        if ($number > $secondMax && $number < $max) {
            $secondMax = $number;
        }
    }
    echo "Second Maximum Number is $secondMax";
}
?>