
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
  </head>
  <body>
    <!-- Nav bar code -->

<nav class="navbar navbar-expand-lg navbar_style p-3">
      <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5 text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li><li class="nav-item">
            <li class="nav-item">
            <a class="nav-link" href="index.php">World Corona Live</a>
          </li><li class="nav-item">
             <li class="nav-item">
          <a class="nav-link" href="testing.php">Book Covid Test</a>
           <li class="nav-item">
          <a class="nav-link" href="vaccinecentre.html">Find Vaccineation Centre </a>
        </li><li class="nav-item">
            <a class="nav-link" href="payment.php">Donation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminlogin.php">Admin Login</a>
          </li>
     <!--   </li>
          <a class="nav-link" href="#sympid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevent">Prevention</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact.php">Covid Care</a>
        </li>-->
      </ul>
    </div>
  </nav>

<!-- Nav bar End here code -->

<!-- Contact us Form Code Start -->


<div class="container py-3">
    <div class="row">
      <div class="col-md-12"> 
        <h2 class="text-center mb-3">Covid Care Form</h2>

        <hr class="mb-4">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <span class="anchor" id="formLogin"></span> 
            <!-- form card login -->
            <div class="card card-outline-secondary">
              <div class="card-header">
                <h3 class="mb-0 text-center">Enter Details</h3>
              </div>
              <div class="card-body">

    <form action="" method="POST">
      
  <div class="form-group">
    <label ><h5>Name</h5></label>
    <input type="text" class="form-control" name="uname" placeholder="Name" required>
  </div>
 
  <div class="form-group">
    <label ><h5>Email</h5></label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <div class="form-group">
    <label ><h5>Mobile</h5></label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile" required>
  </div>
 <div class="form-group">
  <h5>Choose Gender</h5>
 </div>
  </br>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Female
  </label>

</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
  Male 
  </label>
  <br>
  <div class="form-group">  
          <label for="inputDate"><h5>Choose DOB</h5></label>  
          <input type="input" class="form-control" id="inputDate">  
        </div>  
  </br>
   <div class="input-group">
</div>
    <label><h5>Enter Address</h5></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" placeholder="Address"></textarea>
  </div>
   <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Samplemage.jpg</label>
  </div>
    <div class="button">
       <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </div>
   

</form>

  </div>


<!-- Contact us Form Code Ends here-->




</div>


    </body>
  </html>


    <?php
$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';

$con = mysqli_connect($server,$user,$password,$db);
if(isset($_POST['submit'])){
$username = $_POST['uname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$need = $_POST['need'];
$state=$_POST['state'];
$msg = $_POST['msg'];


  
  $chk = "";


foreach($need as $chk1){
   $chk .= $chk1.",";
}

 $insertquery = "insert into covidcases(username,email,  mobile,need,state,message) values('$username','$email','$mobile',' $chk','$state','$msg')";


$query = mysqli_query($con, $insertquery);

if ($query) {
  ?>
<script >
  alert("Form Submitted Admin Will contact you ASAP");
</script>



  <?php
} else{


  ?>
<script >
  alert("Not insert  Successfull");
</script>



  <?php
}





}



    ?>

