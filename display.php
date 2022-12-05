<?php
session_start();
$uname=$_SESSION['username'];
if(!isset($_SESSION['username']))
{
header("location: adminlogin.php");
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID Care Data</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar_style p-3">
      <a class="navbar-brand pl-5" href="#">COVID-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5 text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li> 
          <li class="nav-item">
          <a class="nav-link" href="adminmedicine.php">Medicine Data</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="admindonation.php">Covid Donation Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testingdata.php">Coronavirus Testing Data </a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout </a>
        </li>
      </ul>
    </div>
  </nav>

<div class="jumbotron">
  <div class="card">
<div class="container mt-md-5">
  <h1 class="text-center mt-6 mb-6">COVID-19 CARE FORM DATA</h1>
</div>
<div class="centre-div ">
  <div class="table-responsive ">
    
    <table  class="table-dark table-striped" id="myTable">
      <thead>

        <tr>
          <th>username</th>
          <th>email</th>
          <th>mobile</th>
          <th>need</th>
          <th>state</th>
          <th>message</th>
          <th colspan="2">Operation</th>
        </tr>
      </thead>
      <tbody>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Patients.." title="Type in a name" width="100">
     <?php

$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';


$con = mysqli_connect($server,$user,$password,$db);

if ($con) {
  ?>
<script >
  alert("Connection Successfull");
</script>



  <?php
} else{


  ?>
<script >
  alert("No Connection was Successfull");
</script>



  <?php
}

  
//$sql = "SELECT * FROM `covidcases`";
//$result = mysqli_query($con, $sql);

//echo mysqli_num_rows($result);

$selectquery = "select * from covidcases";
$query = mysqli_query($con,$selectquery);

while ($res = mysqli_fetch_array($query)) {


?>

  <tr>
          
          <td><?php echo $res['username'];?></td>
          <td><?php echo $res['email'];?></td>
          <td><?php echo $res['mobile'];?></td>
          <td><?php echo $res['need'];?></td>
          <td><?php echo $res['state'];?></td>
          <td><?php echo $res['message'];?></td>
          <td><a href="mail.php" data-toggle="tooltip" data-placement="top" title="Send Message"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
          <td data-toggle="tooltip" data-placement="top" title="Delete Record"><a href="delete.php?ids=<?php echo $res['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>

<?php
}
?>
      </tbody>
    </table>

</div>
</div>
</div>
</div>
 <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

</script>

 </body>
 </html>