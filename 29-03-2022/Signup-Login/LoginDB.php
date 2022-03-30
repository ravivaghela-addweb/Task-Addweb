<html>
<head>
    <title>Insert data</title>
</head>
<body>
    <form method="post">
        <label for="uname">UserName : </label>
        <input type="text" name="username" id="uname" /><br/>
        <label for="pass">Password : </label>
        <input type="password" name="password" id="pass" /><br/><br/>
        <input type="submit" name="login" value="Login" />
    </form>
</body>
</html>
<?php
if (isset($_POST['login'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $con=mysqli_connect("localhost","root","","QueryDatabase") or die("Error in Connection");
    $query=mysqli_query($con,"select * from login where username='$username' and password='$password'") or die("Error in query");
    $rows=mysqli_num_rows($query);
    if($rows>0)
    {
        echo "Login Successful";
    }
    else
    {
        echo "Incorrect Username or password";
    }

    mysqli_close($con);
}
?>