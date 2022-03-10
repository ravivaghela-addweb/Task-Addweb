<h2>Program 40 : Print The Series 1, 3, 5, 7, ……n </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    for ($i = 1; $i <= $number;) {
        echo "$i, ";
        $i = $i + 2;
    }
}
?>