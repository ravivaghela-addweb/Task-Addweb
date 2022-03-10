<h2>Program 24 : Calculate Billing Amount for a Telephone Customer According to given Slabs</h2>
<form method="post">
    <label for="num">Enter Bill Unit : </label>
    <input type="text" name="unit" id="num" required /><br />
    <input type="submit" value="Calculate Bill" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $unit = $_POST["unit"];
    $extraUnit;
    $billAmount;

    if ($unit < 50) {
        $billAmount = 100;
        echo "Bill Amount = $billAmount<br/> Bill Unit = $unit";
    } else if ($unit > 50 && $unit <= 100) {
        $extraUnit = $billUnit - 50;
        $billAmount = 100 + ($extraUnit * 1);
        echo "Bill Amount = $billAmount<br/> Bill Unit = $unit";
    } else if ($unit > 100 && $unit <= 200) {
        $extraUnit = $unit - 50;
        $billAmount = 100 + ($extraUnit * 1.50);
        echo "Bill Amount = $billAmount<br/> Bill Unit = $unit";
    } else if ($unit > 200 && $unit <= 300) {
        $extraUnit = $unit - 50;
        $billAmount = 100 + ($extraUnit * 2);
        echo "Bill Amount = $billAmount<br/> Bill Unit = $unit";
    } else if ($unit > 300) {
        $extraUnit = $unit - 50;
        $billAmount = 100 + ($extraUnit * 2.50);
        echo "Bill Amount = $billAmount<br/> Bill Unit = $unit";
    }
}
?>