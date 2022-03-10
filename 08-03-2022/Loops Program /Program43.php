<h2>Program 43 : Print The Series 1, 0, 1, 0, ……n </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 2 == 0) {
            $p = 1;
            $q = 0;
        } else {
            $p = 0;
            $q = 1;
        }
        for ($j = 1; $j <= $i; $j++) {
            if ($j % 2 == 0)
                echo "$p, ";
            else
                echo "$q, ";
        }
    }
}
?>