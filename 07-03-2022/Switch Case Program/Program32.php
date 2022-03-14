<h2>Program 32 : Print Name of Month When The Input Number</h2>
<form method="post">
    <label for="num">Enter Month Number : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Get Month Name" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $number = $_POST["number"];
    // echo "Entered Month Number : $number<br/>";
    switch ($number) {
        case 1:
            echo ("$number Number Month is January");
            break;
        case 2:
            echo ("$number Number Month is February");
            break;
        case 3:
            echo ("$number Number Month is March");
            break;
        case 4:
            echo ("$number Number Month is April");
            break;
        case 5:
            echo ("$number Number Month is May");
            break;
        case 6:
            echo ("$number Number Month is June");
            break;
        case 7:
            echo ("$number Number Month is July");
            break;
        case 8:
            echo ("$number Number Month is Augest");
            break;
        case 9:
            echo ("$number Number Month is September");
            break;
        case 10:
            echo ("$number Number Month is October");
            break;
        case 11:
            echo ("$number Number Month is November");
            break;
        case 12:
            echo "$number Number Month is December";
        default:
            echo ("Your Input Invalid");
    }
}
?>