<h2>Program 41 : Print The Series 2, 4, 6, 8, ……n </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    for ($i = 2; $i <= $number; $i++) {
        if ($i % 2 == 0) {
            echo "$i, ";
        }
    }
}
?>