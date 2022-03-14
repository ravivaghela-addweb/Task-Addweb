<h2>Program 72 : Find an Element in the Array (Linear Searching)</h2>
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
    $n = sizeof($arr);
    // echo "Array : ",implode(", ",$arr);
    // echo "<br/>";
    $result = 0;
    for($i = 0; $i < $n; $i++)
    {
        if($arr[$i] == $value)
            $result = $i;
            
    }
    if(!$result==0)
        echo  "$value Element is Present at Index : $result";
    else
        echo "$value Element is not Present in Array"; 

}

?>
