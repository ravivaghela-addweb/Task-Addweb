<center>
<?php
session_start();
if(isset($_SESSION['email']))
{
    if(isset($_GET['email']))
    {
        echo "<h2>Update Data</h2>";
        error_reporting(0);
        $con=mysqli_connect("localhost","root","","Admin") or die("Error in Connection");
        $query=mysqli_query($con,"select * from credential") or die("Error in query");
        echo "<table border=2><tr><td>Full Name</td><td>Mobile No</td>
            <td>Address</td><td>Email</td><td>Password</td></tr>";
        if($query)
        {
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
        }
    }
}
    echo "</table>";
    mysqli_close($con);
    echo "<br/>";
    $demail=$_GET['email'];
    $con=mysqli_connect("localhost","root","","Admin") or die("Error in Connection");
    $query=mysqli_query($con,"select * from credential where email='$demail'") or die("Error in query");
    while($row=mysqli_fetch_array($query))
    {
        $name=$row["name"];
        $mobile=$row["mobile"];
        $address=$row["address"];
        $email=$row["email"];
        $password=$row["password"];
    }

    echo "<form method='post'>
        <label for='name'>Name : </label>    
        <input type='name' name='name' id='name' value='$name' /><br /><br/>
        <label for='mobile'>Mobile No : </label>
        <input type='number' name='mobile' id='mobile' value='$mobile' /><br/><br/>
        <label for='address'>Address : </label>
        <input type='text' name='address' id='address' value='$address' /><br/><br/>
        <label for='email'>Email :</label>
        <input type='email' name='email' id='email' value='$email' /><br/><br/>
        <label for='password'>Password :</label>
        <input type='password' name='password' id='password' value='$password' /><br/><br/>
        <input type='submit' name='update' value='Update Data' />
        <input type='submit' name='back' value='Back Dashboard' />
    </form>";
    if(isset($_POST['back']))
    {
        header('Location:Dashboard.php');
    }
    if (isset($_POST['update'])) 
    {
        $dname = $_POST['name'];
        $dmobile = $_POST['mobile'];
        $daddress = $_POST['address'];
        $demail = $_POST['email'];
        $dpassword = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "Admin") or die("Error in Connection");
        $queryDB = "update credential set name='$dname',mobile=$dmobile,address='$daddress',
                    email='$demail',password='$dpassword' where email='$email'";
        $query = mysqli_query($con,$queryDB) or die("Error in Query");
                    
        if ($query) 
        {
            echo "Data Updated";
            // header('Location:Update.php');
            header('refresh:1;url=Dashboard.php');
        } 
        else 
        {
            echo "Error in Updating";
        }

        mysqli_close($con);
    }
    if(empty($_SESSION))
    {
        header('Location:AdminLogin.php');
    }
    if(!isset($_SESSION['email']) || !isset($_GET))
    {
    setcookie("PHPSESSID","",time()-3600,"/");
    header("Location:AdminLogin.php");
    }
    if(!isset($_GET['email']))
    {
    setcookie("PHPSESSID","",time()-3600,"/");
    header("Location:AdminLogin.php");
    }

?>
</center>