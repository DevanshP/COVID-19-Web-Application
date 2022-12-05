<?php
session_start();
$uname=$_SESSION['username'];
if(!isset($_SESSION['username']))
{
header("location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Message to Patients</title>
    <link rel="stylesheet" href="styleMail.css">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #a29bfe;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>

</head>
<body>
  <ul>
    <li style="float:right"><a href="display.php">Home</a></li>
  <li style="float:right"><a href="logout.php">Logout</a></li>
  <li><a href="index.php">Covid-19</a></li>
</ul>




    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">
Send Message</h2>
<p class="text-center">
Send message to covid patients</p>
                <?php
                    //first we leave this input field blank
                    $recipient = "";
                    //if user click the send button
                    if(isset($_POST['send'])){
                        //access user entered data
                       $recipient = $_POST['email'];
                       $subject = $_POST['subject'];
                       $message = $_POST['message'];
                       $sender = "From: devansh2021@gmail.com";
                       if(empty($recipient) || empty($subject) || empty($message)){
                           ?>
                           <!-- display an alert message if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
<?php
                        }else{
                           if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your mail successfully sent to $recipient"?>
                            </div>
<?php
                           $recipient = "";
                           }else{
                            ?>
                            <!-- display an alert message if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
<?php
                           }
                       }
                    }
                ?> 
                <form action="mail.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                    </div>
<div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                    </div>
<div class="form-group">

 <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Send Message to Paients"></textarea>
  </div>
<div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                    </div>
</form>
</div>
</div>
</div>
</body>
</html>