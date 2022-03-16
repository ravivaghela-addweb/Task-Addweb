<form method="post">
    <lable for="uname" >Enter Username :</lable>  
    <input name="username" id="uname" type="text" ><br/>
    <lable for="password">Enter Password : </lable> 
    <input name="password" id="password" type="password" ><br/><br/>
    <input type="submit" value="Login" name="login">
</form>
<?php
if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(empty($username) || empty($password))
    {       
        if(empty($username) && !empty($password))
        {
            echo "Please Enter Username!";
        }
        else if(empty($password) && !empty($username))
        {
            echo "Please Enter Password!";
        }
        else
        {
            echo "Please Enter Username and Password!";
        }
    }
    else if(empty($_COOKIE[$username && $password]))
    {
        setcookie("username",$username,time() + 3600,"/");
        echo "Login Success";
        header('refresh:1;url=logout.php');
    }
}
else if(!empty($_COOKIE))
{
    echo "Cookies Already exist! Please Logout either Wait 60 Seconds";
}
else
{
    echo "Cookies not set";
}
?>

