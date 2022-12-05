<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<?php include 'links/links.php'?>
	<link rel="stylesheet" type="text/css" href="css/style2.css">

</head>
<body>

<?php

include 'dbcon1.php';


if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($con,$_POST['username']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

$pass = password_hash($password, PASSWORD_BCRYPT); // function used to encrpyt password when user enter password in database it will be encrypted form
$cpass = password_hash($password, PASSWORD_BCRYPT);

$emailquery = "select * from registration where email='$email'";

$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);


if ($emailcount>0) { //checking email if email already exits in the database
	
	echo "Email Already Exist";
}else{

if($password === $cpassword){

$insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

$iquery = mysqli_query($con,$insertquery);
if ($con) {
	?>
	<script>
		alert("Inserted  Successful");
	</script>

<?php
}else
{
	?>
	<script>
		alert("Not Inserted");
	</script>

<?php
}

}else{
	?>
	<script>
		alert("Please Enter Same Password ");
	</script>

<?php
}


}



}




?>





<div class="split-screen">
	<div class="left">
		<section class="copy">
			<h1>Welcome To Programming Quiz</h1>
			<p>Please Signup To Continue </p>
		</section>
	</div>
	<div class="right">
		<form action="" method="POST">
			<section class="copy">
				<h2>Sign up</h2>
                <div class="login-container">
                	<p>Already Have An Account? <a href="login1.php">
                    <strong>Log In</strong></a>
                	</p>
                </div>
			</section>
			<div class="input-container name">
				<label for="fname">Full Name</label>
			<input type="fname" name="username" type="text" required="#">
			<div class="input-container name">
				<label for="fname">Email</label>
			<input type="email" name="email" type="email" required="#">
			<div class="input-container name">
				<label for="phone">Phone Number</label>
			<input type="phone" name="mobile" type="phone" required="#">
			<div class="input-container name">
				<label for="Password">Create Password</label>
			<input type="Password" name="password" type="Password" required="#">
			<div class="input-container name">
				<label for="Password">Repeat Password</label>
			<input type="Password" name="cpassword" type="Password" required="#">
            <button class="signup-btn" type="submit" name="submit">
            	Signup
            </button>
           <!-- <section class="copy legal">
            	<p><span class="small">By Continuing, you agree to accept our<br><a href="#">Pivacy Policy</a> &amp;<a href="#">Terms of Service</a>.</span></p>
            </section>
             --!>
		</form>
	</div>
</div>
</body>
</html>