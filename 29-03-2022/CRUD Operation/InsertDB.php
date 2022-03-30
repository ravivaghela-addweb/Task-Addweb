<?php
    echo "<h3>MYSQL Delete Operation</h3>";
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
    echo "<br/>";
    mysqli_close($con);
?>

<html>
<head>
    <title>Insert Databse</title>
</head>
<body>
    <form method="post">
        <label for="id">ID : </label>
        <input type="number" name="id" id="id" /><br />
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" /><br />
        <label for="address">Address : </label> 
        <input type="text" name="address" id="address" /><br />
        <label for="mobile">Mobile : </label> 
        <input type="number" name="mobile" id="mobile" /><br /><br/>
        <input type="submit" name="Insert" value="Insert Data" />
    </form>
</body>
</html>
<?php
if (isset($_POST['Insert'])) 
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $con = mysqli_connect("localhost", "root", "", "QueryDatabase") or die("Error in Connection");
    $query = mysqli_query($con, "Insert into student values($id,'$name','$address',$mobile)") or die("Please Insert Data");
    if ($query) 
    {
        echo "Data Inserted";
        header('Location:InsertDB.php');
    } 
    else 
    {
        echo "Error in Inserting";
    }

    mysqli_close($con);
}
?>