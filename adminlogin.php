<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","simplelogin");
$query="SELECT * FROM user where username='$username' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
    header('location:display.php');
    $_SESSION['username']=$username;
 }
else{
    echo "INVALID USERNAME AND PASSWORD";
}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="adminlogin.php" method="POST" class="box">
                    <h1>Admin Login</h1>
                    <p > Please enter your login and password!</p>
                     <input type="text" name="username" placeholder="Username">
                     <input type="password" name="password" placeholder="Password">
                      <input type="submit" name="submit"placeholder="Login" >
                 
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>








    