<h2>Program 47 : Prime Number or Not </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br /></br />
    <input type="submit" value="Check Prime or Not" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $num = $_POST["number"];
    $count = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0)
            $count++;
    }

    if ($count == 2)
        echo "$num is a Prime Number";
    else
        echo "$num is not a Prime Number";
}
?>