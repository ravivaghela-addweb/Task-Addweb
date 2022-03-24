<form method="post">
    <label for="uname">Username : </label>
    <input name="username" type="text" id="uname" /><br/>
    <label for="pass">Password : </label>
    <input name="password" type="password" id="pass"/><br/>
    <input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($_SESSION['username']) && empty($_SESSION['password']))
    {
        if($username == 'ravi' && $password == '0798')
        {
            session_start();
            $_SESSION['username'] = $username;
            echo "Login Success";
        header('refresh:0.5;url=logoutSession.php');
        }
        else if(empty($username) && empty($password)) 
            echo "Please Enter Admin Username and Password!";
    }
}
else if(!empty($_COOKIE) || !empty($_SESSION))
    echo "Session Unset! But,<br/>Your Cookie Stored";
else 
    echo "Session not started";
?>
