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
        <input type="submit" name="Insert" value="Insert Data" />&nbsp;&nbsp;
        <input type="submit" name="show" value="Show Data" />
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
    } 
    else 
    {
        echo "Error in Inserting";
    }

    mysqli_close($con);
}
if(isset($_POST['show']))
{
    header('Location:SelectDB.php');
}
?>