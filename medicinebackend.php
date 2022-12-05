<?php

session_start();

?>


<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';
$con = mysqli_connect($server,$user,$password,$db);


if(isset($_POST['submit']))
{

$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$dob =  $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$medtype= $_POST['medtype'];
$injecttype = $_POST['injecttype'];




 $query = "INSERT INTO meddata(fullname,mobile,dob,address,state,medtype,injecttype,image) VALUES ('$fullname','$mobile','$dob','$address','$state','$medtype','$injecttype','$image')";


    $query_run = mysqli_query($con, $query);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }
    
if($query_run)
    {
        $_SESSION['data'] = "Thankyou! Your Medicine Requirement has been sent succsfully ";
        header("Location: medicine.php");
    }
    else
    {
        $_SESSION['data'] = " Not Inserted";
        header("Location:  medicine.php");
    }
}


?>