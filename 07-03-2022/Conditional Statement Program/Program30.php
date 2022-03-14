<h2>Program 30 : Print Grade of a Student Obtained in Exams According to given Criteria</h2>
<form method="post">
    <label for="num1">Enter Gujarati Marks :</label>
    <input type="text" name="sub1" id="num1" required /><br />
    <label for="num2">Enter Science Marks :</label>
    <input type="text" name="sub2" id="num2" required /><br />
    <label for="num3">Enter Maths Marks :</label>
    <input type="text" name="sub3" id="num3" required /><br />
    <label for="num4">Enter Computer Marks :</label>
    <input type="text" name="sub4" id="num4" required /><br />
    <label for="num5">Enter Hindi Marks :</label>
    <input type="text" name="sub5" id="num5" required /><br />
    <input type="submit" value="Calculate Result" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    $sub1 = $_POST["sub1"];
    $sub2 = $_POST["sub2"];
    $sub3 = $_POST["sub3"];
    $sub4 = $_POST["sub4"];
    $sub5 = $_POST["sub5"];

    echo "Gujarati = $sub1 <br />";
    echo "Science = $sub2 <br />";
    echo "Maths = $sub3 <br />";
    echo "Computer = $sub4 <br />";
    echo "Hindi = $sub5 <br />";

    $sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percentage = $sum / 5;

    echo "Total Marks = $sum <br />";
    echo "Your Obtained Marks $sum out of 500 Marks<br/>";
    echo "Percentage of Total Marks = $percentage<br/>";

    if ($percentage >= 85)
        echo "Your Grade = S";
    else if ($percentage >= 65)
        echo "Your Grade = A";
    else if ($percentage >= 55)
        echo "Your Grade = B";
    else if ($percentage >= 45)
        echo "Your Grade = C";
    else if ($percentage < 45)
        echo "You Fail";
    else
        echo "Your Marks is Invalid";
}
?>