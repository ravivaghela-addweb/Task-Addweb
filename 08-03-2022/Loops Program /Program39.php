<center>
    <h3>Program 39 : Print The Table for Any Number (x). </h3>
    <form method="POST">
        <label for="num">Enter a number :</label>
        <input type="text" name="number" id="num">
        <input type="Submit" value="Calculate Table" name="submit">
    </form>
</center>
<?php
if (isset($_POST["submit"])) {
    $num = $_POST["number"];

    echo "<p style='text-align: center;'> Multiplication Table of $num </p>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<p style='text-align: center;'>$num  x  $i = " . $num * $i . "</p>";
    }
}
?>