<h2>Program 18 : Check Number is Odd or Even</h2>
<form method="post">
    <label for="num">Enter Your Number :</label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Even or Odd" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST['number'];
    if (($number % 2) == 0) {
        echo "$number is an Even number";
    } else {
        echo "$number is Odd number";
    }
}
?>