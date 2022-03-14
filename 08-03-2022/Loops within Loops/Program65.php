<h2>Program 65 : Print all The Prime Numbers among 1 to n </h2>
<form method="post">
    <label for="num">Enter Number : </label>
    <input type="text" name="number" id="num" required /><br /><br/>
    <input type="submit" value="Get Prime Numbers" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $number = $_POST["number"];
    echo "Prime Numbers 1 to $number : ";
    for ($i = 0; $i < $number; $i++) 
    {
        if ($i == 1 || $i == 0) continue;
        $f = 1;
        
        for ($j = 2; $j < intval($i / 2) + 1; $j++) 
        {
            if ($i % $j == 0) 
            {
                $f = 0;
                break;
            }
        }
        if ($f == 1)
            echo "$i, ";
    }



    // if($n == 1 || $n == 0) return false;
   
    // for($i = 2; $i < $n; $i++)
    //     { 
    //         if($n % $i == 0) return false;
    //     }
    //     for($i = 1; $i <= $n; $i++)
    //     {
     
    //         if($i) 
    //         {
    //             echo $i;
    //         }
    // }
}
?>