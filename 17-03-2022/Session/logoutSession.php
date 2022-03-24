<?php

if(!empty($_COOKIE))
{
    session_start();
    $username = $_SESSION['username'];
    echo "Hello $username";
    echo "<br/>";
    echo "<form method='post'>
            <input type='submit' value='Logout' name='logout'>
          </form>";
    if(isset($_POST["logout"]))
    {
        if(isset($_SESSION['username']))
        {
            unset($_SESSION);
            setcookie( "PHPSESSID","", time()-3600,"/");
            header('refresh:0.3;url=loginSession.php');
        }
    }
}
if(empty($_SESSION))
{
    if(empty($_COOKIE))
    header('refresh:0.3;url=loginSession.php');
}

?>
