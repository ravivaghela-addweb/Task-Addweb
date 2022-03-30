<?php
    echo "<h3>MYSQL CRUD Operation</h3>";
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
    <title>CRUD Operation</title>
</head>
<body>
   <form method="POST">
        <b><label for="select">Reload Data : </label></b><input type="submit" name="select" value="Reload"><br><br>
        <b><label for="insert">Insert Data : </label></b><input type="submit" name="insert" value="Insert"><br><br>
        <b><label for="update">Edit Data : </label></b><input type="submit" name="update" value="Update"><br><br>
        <b><label for="delete">Delete Data: </label></b><input type="submit" name="delete" value="Delete"><br><br>
   </form>
</body>
</html>

<?php
if(isset($_POST['insert'])){
    header('Location:InsertDB.php');
}
if(isset($_POST['select'])){
    header('Location:OperateDB.php');
}
 if(isset($_POST['update'])){
     header('Location:UpdateDB.php');
}
  if(isset($_POST['delete'])){
     header('Location:DeleteDB.php');
}
 ?>