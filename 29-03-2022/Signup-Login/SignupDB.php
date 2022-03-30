<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <form method="post">
        <label for="name">Enter Name :</label>
        <input type="text" id="name" name="name" /><br/>
        <label for="uname">Enter UserName : </label>
        <input type="text" name="username" id="uname" /><br/>
        <label for="pass">Enter Password : </label>
        <input type="password" name="password" id="pass" /><br/><br/>
        <input type="submit" name="signup" value="Sign Up" />
    </form>
</body>
</html>
<?php
    if(isset($_POST['signup']))
    {
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $con = mysqli_connect("localhost", "root", "", "QueryDatabase") or die("Error in Connection");
        $query = "INSERT INTO `login`(name,username,password) VALUES ('$name','$username','$password')";
        $queryDB = mysqli_query($con,$query) or die("Error in Query!");
        if ($queryDB) 
        {
            echo "Sign Up Successful";
            header('Location:LoginDB.php');
        } 
        else 
        {
            echo "Sign Up Again";
        }
    }
?>