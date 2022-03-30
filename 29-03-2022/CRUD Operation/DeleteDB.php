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
        <label for="id">Enter ID : </label>
        <input type="number" name="id" id="id" /><br/><br/>
        <input type="submit" name="delete" value="Delete Data" />
    </form>
</body>
</html>
<?php
if (isset($_POST['delete'])) 
{
    $id=$_POST['id'];
    $con=mysqli_connect("localhost","root","","QueryDatabase") or die("Error in Connection");
    $query=mysqli_query($con,"delete from student where id=$id") or die("Please! Enter ID");
    if($query)
    {   
        echo "Data Deleted";
        header('Location:DeleteDB.php');
    }
    else
    {
        echo "Error in Deleting";
    }

    mysqli_close($con);
}
?>