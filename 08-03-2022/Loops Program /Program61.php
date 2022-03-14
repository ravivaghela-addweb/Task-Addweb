<h2>Program 61 : Input ages of 10 Persons and Count the Number of Persons Between age Group of 50 and 60</h2>
<form method="post">
    <label for="num1">Enter First Person Age :</label>
    <input type="text" name="number1" id="num1" required /><br />
    <label for="num2">Enter Second Person age :</label>
    <input type="text" name="number2" id="num2" required /><br />
    <label for="num3">Enter Third Person Age :</label>
    <input type="text" name="number3" id="num3" required /><br />
    <label for="num4">Enter Fourth Person Age :</label>
    <input type="text" name="number4" id="num4" required /><br />
    <label for="num5">Enter Fifth Person Age :</label>
    <input type="text" name="number5" id="num5" required /><br />
    <label for="num6">Enter Sixth Person Age :</label>
    <input type="text" name="number6" id="num6" required /><br />
    <label for="num7">Enter Seventh Person Age :</label>
    <input type="text" name="number7" id="num7" required /><br />
    <label for="num8">Enter Eighth Person Age :</label>
    <input type="text" name="number8" id="num8" required /><br />
    <label for="num9">Enter Ninth Person Age :</label>
    <input type="text" name="number9" id="num9" required /><br />
    <label for="num10">Enter Tenth Person Age :</label>
    <input type="text" name="number10" id="num10" required /><br />
    <label for="num1">Enter Minimum Age : </label>
    <input type="text" name="number1" id="num1" required /><br />
    <label for="num2">Enter Maximum Age : </label>
    <input type="text" name="number2" id="num2" required /><br /><br/>
    <input type="submit" value="Count Age of Person" name="submit" />
</form>
<?php
    if(isset($_POST["submit"]))
    {
        $age1 = $_POST["number1"];
        $age2 = $_POST["number2"];
        $age3 = $_POST["number3"];
        $age4 = $_POST["number4"];
        $age5 = $_POST["number5"];
        $age6 = $_POST["number6"];
        $age7 = $_POST["number7"];
        $age8 = $_POST["number8"];
        $age9 = $_POST["number9"];
        $age10 = $_POST["number10"];
        $min = $_POST["number1"];
        $max = $_POST["number2"];
        echo "List of 1 to 10 Person age : [$age1, $age2, $age3, $age4, $age5, $age6, $age7, $age8, $age9, $age10]";
        $arr = array($age1, $age2, $age3, $age4, $age5, $age6, $age7, $age8, $age9, $age10);
        echo "<br/>Total Person Between $min age to $max age : ";
        if (empty($arr)) {
            return;
        } 
        foreach ($arr as $age) 
        {
            $count = 0;
            for($i = $min; $i <= $max; $i++)
            {
                if($age >= $min && $age <= $max)
                {
                    echo $age[$i];
                    $count++;
                }
                
                
            }
            echo "$count, ";
            
        }
    }
?>