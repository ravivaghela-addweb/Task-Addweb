<h2>Program 27 : Input String and Reverse String</h2>
<form method="post">
    <label for="txt">Enter String :</label>
    <input type="text" name="txt" id="txt" required /><br />
    <input type="submit" value="Reverse" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    // For Reversing Charactors String
    $str = $_POST["txt"];
    echo "Entered String : $str";
    $i = strlen($str) - 1;
    echo "<br/>Reversed String : ";
    while ($i >= 0) {
        echo $str[$i];
        $i = $i - 1;
    }

    // For Reversing Word String
    // $i = strlen($str) - 1;
    // $end = $i + 1;
    // $result = "";
    
    // while($i >= 0)
    // {
        //     if($str[$i] == ' ')
        //     {
            //         $start = $i + 1;
    //         while($start != $end)
    //             $result = $result . $str[$start++];
    
    //         $result = $result . ' ';
    
    //         $end = $i;
    //     }
    //     $i--;
    // }
    // $start = 0;
    // while($start != $end)
    //     $result = $result . $str[$start++];
    
    // echo "Entered String : $str";
    // echo "<br/>Reversed String : $result";
    
}
?>