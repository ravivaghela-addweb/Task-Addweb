<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .alert 
        {
            position: relative;
            padding: 0rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
            text-decoration: none;
        }
    </style>
</head>
</html>
<center>
<?php
session_start();
if(!isset($_SESSION['email']))
{
    setcookie("PHPSESSID","",time()-3600,"/");
    header("Location:AdminLogin.php");
}
if(isset($_SESSION['email']))
{
    echo "<h2>Admin Dashboard</h2><br/>";
    $dbemail = $_SESSION['email'];
    $serverName = "localhost";
    $phpMyAdminusername = "root";
    $phpMyAdminpassword = "";
    $dbName = "Admin";
    $con=mysqli_connect($serverName,$phpMyAdminusername,$phpMyAdminpassword,$dbName) or die("Error in Connection");
    $username = "select name from credential where email='$dbemail'";
    $dbquery = mysqli_query($con,$username) or die("Error in query");
    while($adminName = mysqli_fetch_array($dbquery))
    {
        echo "Hello ". $adminName['name'];
    }
    echo "<br/><br/>";
    $dbtable = "select * from credential"; 
    $credential = mysqli_query($con,$dbtable) or die ("Error in Query");
    if($credential)
    {
        echo "<table class='table table-dark table-striped' border=2><tr><td>Full Name</td><td>Mobile No</td><td>Address</td><td>Email</td><td>Password</td><td>Edit Data</td><td>Delete Data</td></tr>";
        while($row=mysqli_fetch_array($credential))
        {
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["mobile"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "<td><a class='alert alert-info' href='Update.php?email=".$row['email']."'>Update</a></td>";
            if($dbemail==$row['email']){
                echo "<td>-----------------</td>";
            }
            else{
                echo "<td><a class='alert alert-danger' href='Delete.php?email=".$row['email']."'>Delete</a></td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<br/><br/>";
    $email = $_SESSION['email'];
    $con=mysqli_connect("localhost","root","","Admin") or die("Error in Connection");
    $user = "select name from credential where email='$email'";
    $query=mysqli_query($con,$user) or die("Error in query");
    echo "<br/><br/>";
    echo "<form method='post'>
            <input type='submit' value='Logout' name='logout' />&nbsp;&nbsp;
            <input type='submit' value='Add User' name='add' />
        </form>";
    if(isset($_POST['add']))
    {
        header("Location:AdminSignup.php");
    }
    if(isset($_POST["logout"]))
    {
        if(isset($_SESSION['email']))
        {
            unset($_SESSION);
            setcookie( "PHPSESSID","", time()-3600,"/");
            echo '<div class="alert alert-success">
                <strong>Logout Success!</strong>
                </div>';
            header('refresh:0.3;url=AdminLogin.php');
        }
    }
}
else
{
    echo "Error in Table";
}
mysqli_close($con);
?>
</center>