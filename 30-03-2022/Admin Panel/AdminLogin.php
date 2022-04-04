<html>
<head>
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <style>
        body 
        {
            background-image: linear-gradient(to left top, #17a2b8, #14abc4, #12b3d1, #11bcde, #12c5eb);
            height: 100vh;
        }
        #login .container #login-row #login-column .login-box 
        {
            border-radius: 50px;
            margin-top: 120px;
            max-width: 500px;
            height: 450px;
            border: 1px solid black;
            background: black;
        }
        #login .container #login-row #login-column .login-box #login-form 
        {
            padding: 50px;
        }
        #login .container #login-row #login-column .login-box #login-form #register-link 
        {
            margin-top: -85px;
        }
        .alert-warning 
        {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }
        .alert 
        {
            position: relative;
            padding: 0.75rem 30.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 172.25rem;
        }
    </style>
</head>
<body>
	<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="email" class="text-info">Email</label><br>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password</label><br>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span><span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
                            <input type="submit" name="signup" class="btn btn-info btn-md" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<center>
<?php
session_start();
if(isset($_POST['signup']))
{
    header("Location:AdminSignup.php");
}
if(isset($_SESSION['email']))
{
    header("Location:Dashboard.php");
}
if (isset($_POST['login'])) 
{
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if(empty($email) || empty($password))
    {
        echo '<div class="alert alert-warning">
        <strong>Please Enter Email and Password</strong> 
        </div>';
        header("refresh:1,url=AdminLogin.php");
    }
    else
    {
        $con=mysqli_connect("localhost","root","","Admin") or die("Error in Connection");
        $query=mysqli_query($con,"select * from credential where email='$email' and password='$password'") or die("Error in query");
        $rows=mysqli_num_rows($query);
        if($rows>0)
        {
            while($row = mysqli_fetch_array($query))
            {
                $dbemail = $row['email'];
                $dbpassword = $row['password'];
            }
            if($dbemail==$email && $dbpassword==$password)
            {
                
                $_SESSION['email'] = $email;
                echo '<div class="alert alert-success">
                <strong>Login Success!</strong>
                </div>';
                header('refresh:1;url=Dashboard.php');
            }
            else
            {
                echo '<div class="alert alert-danger">
                <strong>Please Enter Correct Admin Email and Password!</strong> 
                </div>';
            }
            mysqli_close($con);
        }
        else
        {
            echo '<div class="alert alert-danger">
                <strong>Email Not Found</strong> 
            </div>';
        }
    } 
}

?>
</center>
</html>