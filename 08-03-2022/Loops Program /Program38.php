<h2>Program 38 : Print The Counting 1,2,3,4,………n </h2>
<form method="post">
    <label for="num">Enter Number: </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $n = $_POST["number"];
    for ($i = 1; $i <= $n; $i++) {
        echo "Number $i<br/>";
    }
}
?>