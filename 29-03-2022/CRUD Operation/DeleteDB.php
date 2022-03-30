<html>
<head>
    <title>Insert Databse</title>
</head>
<body>
    <form method="post">
        <label for="id">ID : </label>
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
    $query=mysqli_query($con,"delete from student where id=$id") or die("Error in Query");
    if($query)
    {
        echo "<script>alert('Data Deleted');</script>";
        header('Location:SelectDB.php');
    }
    else
    {
        echo "<script>alert('Error in Deleting');</script>";
    }

    mysqli_close($con);
}
?>