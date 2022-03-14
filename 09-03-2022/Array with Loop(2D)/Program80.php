<h2>Program 80 : Sort a List of Names in Alphabetical Order</h2>
<form method="POST">
    <label for="string">Enter String :</label>
    <input type="text" name="string" id="string" required />
    <input type="submit" name="submit" value="Sort" />
</form>
<?php 
if ( isset($_POST["submit"]) ) 
{
    $string = $_POST["string"];
    // $arr = array($string);
    echo "Original String : $string<br/>";
    $arr = str_split($string);
    sort($arr);
    $result = implode($arr);
    echo "Sorted String : $result";
}
?>