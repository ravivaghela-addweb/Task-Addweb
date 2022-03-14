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
    $arr = array(07, 11, 19 ,99, 10, 07, 19, 98);
    $value = $_POST["number"];
    $left = 0;
    $right = count($arr) - 1;
    $result = 0;
    while ($left <= $right) 
    {
        $midpoint = (int) floor(($left + $right) / 2);

        if ($arr[$midpoint] < $value) 
        {
            $left = $midpoint + 1;
        } 
        elseif ($arr[$midpoint] > $value) 
        {
            $right = $midpoint - 1;
        } else 
        {
            return $midpoint;
        }
    }

    if ($result == -1) 
    {
        echo "Element Not Found...";
    } else 
    {
        echo "Element of Index at : ".$result;
    }
}
?>
