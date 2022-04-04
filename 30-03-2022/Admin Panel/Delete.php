<center>
<?php
    $con=mysqli_connect("localhost","root","","Admin") or die("Error in Connection");
    $query=mysqli_query($con,"select * from credential") or die("Error in query");
    echo "<table border=2><tr><td>Full Name</td><td>Mobile No</td>
        <td>Address</td><td>Email</td><td>Password</td></tr>";
    while($row=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    echo "<br/>";
    echo "<form method='post'>
            Do You want to Delete Data ? &nbsp;
            <input type='submit' value='Yes' name='yes' />&nbsp;or&nbsp;
            <input type='submit' value='No' name='no' />
           </form><br><br>";
    if(isset($_POST['yes']))
    {
        $demail=$_GET['email'];
        $con=mysqli_connect("localhost","root","","Admin") or die("Error in Connection");
        $query=mysqli_query($con,"delete from credential where email='$demail'") or die("Error in Query");
        if($query)
        {   
            echo "Data Deleted";
            header('refresh:1;url=Dashboard.php');
        }
        else
        {
            echo "Error in Deleting";
        }

        mysqli_close($con);
    }
    if(isset($_POST['no']))
    {
        echo "Data Not Deleted";
        header('refresh:1;url=Dashboard.php');
    }

if(empty($_SESSION))
    {
        if(empty($_COOKIE))
        header("Location:AdminLogin.php");
    }
?>
</center>