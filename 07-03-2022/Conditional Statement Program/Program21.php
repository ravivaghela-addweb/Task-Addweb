<h2>Program 21 : Check Number is Palndrome or Not</h2>
<form method="post">
    <label for="num">Enter Number :</label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST['number'];
    $temp = $number;
    $num  = 0;

    while (floor($temp)) {
        $rem = $temp % 10;
        $temp = $temp / 10;
        $num = $num * 10 + $rem;
    }
    if ($num == $number) {
        echo "$number Number is Palindrome";
    } else {
        echo "$number Number is Not Palindrome";
    }
}
?>