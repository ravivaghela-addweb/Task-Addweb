<h2>Program 44 : Print Factorial of Number. </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Factorial" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    $fact = 1;
    for ($i = 1; $i <= $number; $i++) {
        $fact = $fact * $i;
    }
    echo $fact . "<br>";
}
?>