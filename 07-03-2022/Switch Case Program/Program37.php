<h2>Program 37 : Print the Day of the Week When the Number of Day is Input </h2>
<form method="post">
    <label for="num">Enter Number of The Day of Week : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Day Name" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    switch ($number) {
        case "1":
            echo "$number Day of week is Monday!";
            break;
        case "2":
            echo "$number Day of week is today!";
            break;
        case "3":
            echo "$number Day of week is Wednesday!";
            break;
        case "4":
            echo "$number Day of week is Thursday!";
            break;
        case "5":
            echo "$number Day of week is Friday!";
            break;
        case "6":
            echo "$number Day of week is Saturday!";
            break;
        case "7":
            echo "$number Day of week is Sunday!";
            break;
        default:
            echo "Invalid number!";
    }
}
?>