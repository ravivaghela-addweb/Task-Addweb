<h2>Program 29 : Find Maximum, Second Maximum and Minimun Number out of 4-Numnbers Using Ternary Operator</h2>
<form method="post">
    <label for="num1">Enter First Number :</label>
    <input type="text" name="number1" id="num1" required /><br />
    <label for="num2">Enter Second Number :</label>
    <input type="text" name="number2" id="num2" required /><br />
    <label for="num3">Enter Third Number :</label>
    <input type="text" name="number3" id="num3" required /><br />
    <label for="num4">Enter Fourth Number :</label>
    <input type="text" name="number4" id="num4" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];
    $n3 = $_POST["number3"];
    $n4 = $_POST["number4"];
    echo "Entered Total 4-Numbers : $n1 $n2 $n3 $n4<br/>";

    $max = ($n1 > $n2 && $n1 > $n3 && $n1 > $n4) ?
        $n1 : (($n2 > $n3 && $n2 > $n4) ?
            $n2 : ($n3 > $n4 ? $n3 : $n4));
    $min = ($n1 < $n2 && $n1 < $n3 && $n1 < $n4) ?
        $n1 : (($n2 < $n3 && $n2 < $n4) ?
            $n2 : ($n3 < $n4 ? $n3 : $n4));
    echo "Maximum Number = $max <br/> Minimum Number = $min";
}
?>