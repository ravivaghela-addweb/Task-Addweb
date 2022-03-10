<h2>Program 48 : Input any Digit Reverse and Sum of Digit</h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br /></br />
    <input type="submit" value="Sum and Reverse" name="submit" />&nbsp;&nbsp;
    <!-- <input type="submit" value="Reverse" name="reverse" /> -->
</form>
<?php
if (isset($_POST["submit"])) {
    $num = $_POST["number"];
    $temp = $num;
    $sum = 0;
    $rem = 0;
    $rev = 0;
    // for ($i = 0; $i <= $num; $i++)
    while ($num > 0) {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $rev = ($rev * 10) + $rem;
        $num = (int)($num / 10);
    }
    echo "Sum of Digits $temp is $sum<br/>";
    echo "Reverse number of $temp is $rev";
}
// if(isset($_POST["reverse"]))
// {
//     $num = $_POST["number"];
//     $rev = 0;  
//     while ($num > 1)  
//     {  
//         $rem = $num % 10;  
//         $num = ($num / 10);   
//     }  
//     echo "Reverse number of $num is: $rev";  
// }
?>