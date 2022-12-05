
<?php
require 'dbcon.php';
if(isset($_POST['submit'])){

$user = $_POST['user'];
$password = $_POST['pass'];

$email_search = "select * from admintable where user=
'$user'";
$query = mysqli_query($con,$email_search);

$email_count = mysqli_num_rows($query);

if($email_count){
  $email_pass = mysqli_fetch_assoc($query);

  $db_pass = $email_pass['pass'];

   // $pass_decode = password_verify($password, $db_pass);

  if ($db_pass) {
    echo "Login succsfull";
    header('location:display.php');
  
  }
  else{
  
    echo "password Incorrect";
  }
  }else{
   echo "Invalid Email";

  }


}








?>
