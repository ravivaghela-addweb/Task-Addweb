<?php 
    if(!empty($_COOKIE))
    {
        $username = $_COOKIE["username"];
        // header('Location:login.php');
        echo "Username : $username";
        echo "<br/>";
        echo "<form method='post'>
                <input type='submit' value='Logout' name='logout'>
              </form>";
        if(isset($_POST["logout"]))
        {
            setcookie( "username","", time()-3600,"/");
            setcookie( "password","", time()-3600,"/");
            header('refresh:1;url=login.php');
        }
    }
    else if(empty($_COOKIE))
    {
        header('refresh:1;url=login.php');
    }
        
?>