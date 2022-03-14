<h2>Program 34 : 5-Arithmetic Operations on Two Integer Numbers using Switch-Case</h2>
<form method="post">
    <label for="num1">Enter First Number :</label>
    <input type="text" id="num1" name="number1" required /><br /><br />
    <label for="num2">Enter Second Number :</label>
    <input type="text" id="num2" name="number2" required /><br /><br />
    <input type="text" name="option" value="" placeholder="Enter Arithmetc Operation" />
    <input type="submit" value="Calculate" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $option = $_POST["option"];

    echo "First Number is $num1 and Second Number is $num2 <br/>";

    switch ($option) {
        case 'Add':
        case 'add':
        case 'Addition':
        case 'addition':
        case '+':
            $sum = $num1 + $num2;
            echo "Sum = $sum";
            break;
        case 'sub':
        case 'subtraction':
        case 'Sub':
        case 'Subtraction':
        case '-':
            $sub = $num1 - $num2;
            echo "Sub = $sub";
            break;
        case 'multiplication':
        case 'Multiplication':
        case 'Multiply':
        case 'multiply':
        case '*':
            $multi = $num1 * $num2;
            echo "Multiplication = $multi";
            break;
        case 'division':
        case 'divide':
        case 'Division':
        case 'Divide':
        case '/':
            $div = $num1 / $num2;
            echo "Division = $div";
            break;
        case 'modulo':
        case 'Modulo':
        case 'reminder':
        case 'Reminder':
        case '%':
            $mod = floor($num1 % $num2);
            echo "Modulo = $mod";
            break;
        default:
            echo "Your Invalid";
    }
}
?>