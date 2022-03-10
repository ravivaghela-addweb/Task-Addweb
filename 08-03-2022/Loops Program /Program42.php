<h2>Program 42 : Print The Series 1, 4, 7, 10, ……n </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    $count = 1;
    for ($i = 1; $i <= $number; $i++) {
        echo "$count, ";
        $count += 3;
    }
    // while($i <= $number)
    // {
    //     if($i%2 == 0)
    //     {
    //         echo "$count, ";
    //     }
    //     else
    //     {
    //         echo "$count, ";
    //     }
    //     $count += 3;
    //     $i++;
    // }
}
?>