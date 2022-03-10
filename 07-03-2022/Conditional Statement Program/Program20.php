<h2>Program 20 : Find Second Largest Number among Three Numbers</h2>
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
if (isset($_POST["submit"])) {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $num3 = $_POST["number3"];
    if ($num1 >= $num2 && $num1 >= $num3) {
        if ($num2 >= $num3) {
            echo "Second Largest Number = $num2";
        } else {
            echo "Second Largest Number = $num3";
        }
    } else if ($num2 >= $num1 && $num2 >= $num3) {
        if ($num1 >= $num3) {
            echo "Second Largest Number = $num1";
        } else {
            echo "Second Largest Number = $num3";
        }
    } else if ($num1 >= $num2) {
        echo "Second Largest Number = $num1";
    } else {
        echo "Second Largest Number = $num2";
    }
}
?>