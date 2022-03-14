<h2>Program 73 : Find an Element in the Array (Binary Searching)</h2>
<h3>Array : [7, 11, 19, 99, 10, 7, 19, 98]</h3>
<form method="post">
    <label for="num">Enter Number You want to Search : </label>
    <input type="text" name="number" id="num" required /><br /><br/>
    <input type="submit" value="Search Index Number" name="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
    $array = array(07, 11, 19 ,99, 10, 07, 19, 98);
    $value = $_POST["number"];
    if (count($array) === 0) return false;
    $n = sizeof($array);
    $count = 0;
    if(isset($array[$value]))
    {
        for($i = 0; $i < $n; $i++)
        {
            $middle = $i + ($n - $i)/2;
            if($array[$middle] == $value)
            {
                $count++;
            }
            else if($array[$middle] < $value)
            {
                $i = $middle + 1;
                $count++;
            }
            else if($array[$middle] > $value)
            {
                $i = $middle - 1;
                $count++;
            }
        
        }
    }

    if($count == 1)
    {
        echo"Element not Present";
    }
    else
    {
        echo "Element Found";
    }

}
?>
