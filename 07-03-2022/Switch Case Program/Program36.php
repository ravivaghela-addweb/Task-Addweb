<h2>Program 36 : Input Number of The Month of a Year and Print How Many Days are There in The Month.</h2>
<form method="post">
    <label for="num">Enter Number of The Month : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Find Month Days" name="submit" />
</form>
<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    switch ($number) {
        case '1':
        case '3':
        case '5':
        case '7':
        case '8':
        case '10':
        case '12':
            echo "$number Number Month have 31 Days";
            break;
        case '4':
        case '6':
        case '9':
        case '11':
            echo "$number Number Month have 30 Days";
            break;
        case '2':
            echo "$number Number Month have 28 Days";
            break;
        default:
            echo "Invalid Input";
    }
}
?>