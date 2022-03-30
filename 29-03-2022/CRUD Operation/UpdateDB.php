<?php
    error_reporting(0);
    $con=mysqli_connect("localhost","root","","QueryDatabase") or die("Error in Connection");
    $query=mysqli_query($con,"select * from student") or die("Error in query");
    echo "<table border=2><tr><td>ID</td><td>Name</td><td>Address</td><td>Mobile</td></tr>";
    while($row=mysqli_fetch_array($query))
    {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    echo "<br/>";
?>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <form method="post">
        <label for="id">Id : </label>    
        <input type="number" name="id" id="id" />
        <input type="submit" name="find" value="Find Data" />
    </form>
</body>
</html>
<?php
if(isset($_POST['find']))
{
    $id=$_POST['id'];
    $con=mysqli_connect("localhost","root","","QueryDatabase") or die("Error in Connection");
    $query=mysqli_query($con,"select * from student where id=$id") or die("Error in query");
    while($row=mysqli_fetch_array($query))
    {
        $id=$row["id"];
        $name=$row["name"];
        $address=$row["address"];
        $mobile=$row["mobile"];
    }
}
?>
<html>
<head>
    <title>Update data</title>
</head>
<body>
    <form method="post">
        <label for="id">Id : </label>    
        <input type="number" name="id" id="id" value="<?php echo $id ?>" /><br />
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" value="<?php echo $name ?>" /><br/>
        <label for="address">Address : </label>
        <input type="text" name="address" id="address" value="<?php echo $address ?>" /><br/>
        <label for="mobile">Mobile No :</label>
        <input type="number" name="mobile" id="mobile" value="<?php echo $mobile ?>" /><br/>
        <input type="submit" name="Update" value="Update Data" />
    </form>
</body>
</html>
<?php


if (isset($_POST['Update'])) 
{
    $sid=$_POST['id'];
    $sname = $_POST['name'];
    $saddress = $_POST['address'];
    $smobile = $_POST['mobile'];
    $con = mysqli_connect("localhost", "root", "", "QueryDatabase") or die("Error in Connection");
    $query = mysqli_query($con, "update student set name='$sname',address='$saddress', mobile=$smobile where id=$sid") or die("Error in Query");
    print_r("update student set name='$sname',address='$saddress', mobile=$smobile where id=$sid");
    if ($query) 
    {
        echo "Data Updated";
        header('Location:UpdateDB.php');
    } 
    else 
    {
        echo "Error in Updating";
    }

    mysqli_close($con);
}
?>