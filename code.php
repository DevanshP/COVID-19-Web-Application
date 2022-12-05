<?php
session_start();
$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';
$con = mysqli_connect($server,$user,$password,$db);



if(isset($_POST['submit']))
{

$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$testtype = $_POST['testtype'];
$timeslot = $_POST['timeslot'];



  $query = "INSERT INTO testing(fullname,mobile,dob,address,state,testtype,timeslot) VALUES ('$fullname','$mobile','$dob','$address','$state','$testtype','$timeslot')";
    $query_run = mysqli_query($con, $query);

if($query_run)
    {
        $_SESSION['status'] = "Thankyou! Your Testing Slot is Send Succesfully ";
        header("Location: testing.php");
    }
    else
    {
        $_SESSION['status'] = "Date Time Not Inserted";
        header("Location: testing.php");
    }
}

















?>