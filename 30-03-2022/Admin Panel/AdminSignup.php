<html>
<head>
    <title>Admin Signup</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body 
        {
            background-image: linear-gradient(to left top, #17a2b8, #14abc4, #12b3d1, #11bcde, #12c5eb);
            height: 100vh;
        }
        #signup .container #signup-row #signup-column .signup-box 
        {
            border-radius: 50px;
            margin-top: 50px;
            max-width: 600px;
            height: 720px;
            border: 1px solid black;
            background: black;
        }
        #signup .container #signup-row #signup-column .signup-box #signup-form 
        {
            padding: 50px;
        }
        #signup .container #signup-row #signup-column .signup-box #signup-form #register-link 
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
	<div id="signup">
    <div class="container">
        <div id="signup-row" class="row justify-content-center align-items-center">
            <div id="signup-column" class="col-md-6">
                <div class="signup-box col-md-12">
                    <form id="signup-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Signup</h3>
                        <div class="form-group">
                            <label for="name" class="text-info">Full Name</label><br>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="address" class="text-info">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="text-info">Mobile No</label><br>
                            <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile No">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email</label><br>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="pass" class="text-info">Password</label><br>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="repass" class="text-info">Confirm Password</label><br>
                            <input type="password" name="repassword" id="password" class="form-control" placeholder="Enter Re-Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="signup" class="btn btn-info btn-md" value="Sign Up">
                            <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
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
if(isset($_POST['login']))
{
    header('Location:AdminLogin.php');
}
if(isset($_POST['signup']))
{
    $name = trim($_POST['name']);
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['repassword']);
  
    $serverName = "localhost";
    $phpMyAdminusername = "root";
    $phpMyAdminpassword = "";
    $dbName = "Admin";
    if(empty($name) || empty($address || empty($mobile) || empty($email) ||  empty($password) || empty($confirmPassword)))
    {
        echo '<div class="alert alert-warning">
        <strong>Please Enter Email and Password</strong> 
        </div>';
        header("refresh:1,url=AdminSignup.php");
    }
    if(!($password==$confirmPassword))
    {
        echo '<div class="alert alert-warning">
            <strong>Password  and Confirm Password are Not Match!</strong> 
            </div>';
            // header("refresh:0.5,url=AdminSignup.php");
    }
    else
    {
        $con=mysqli_connect($serverName,$phpMyAdminusername,$phpMyAdminpassword,$dbName) or die("Error in Connection");
        $query = "INSERT INTO credential(name,mobile,address,email,password) VALUES 
                        ('$name',$mobile,'$address','$email','$password')";
        $queryDB = mysqli_query($con,$query) or die("Error in Query!");
        if($query)
        {
            echo "Signup Successfully!";
            echo '<div class="alert alert-success">
                <strong>Login Success!</strong>
                </div>';
            session_start();
            if(isset($_SESSION['email']))
            {
                header("refresh:1,url=Dashboard.php");
            }
            else
            {
                header("refresh:1,url=AdminLogin.php");
            }
        }
        else 
        {
            echo '<div class="alert alert-danger">
                <strong>Signup Failed! Try Again!</strong> 
                </div>';
            header("refresh:1,url=AdminSignup.php");
        }
    }
}
?>
</center>

