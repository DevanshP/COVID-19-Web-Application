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
    <title>COVID-19 Medicine Data</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
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
          <a class="nav-link" href="testingdata.php">Coronavirus Testing Data </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">Covid Care Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admindonation.php">Covid Donation Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout </a>
        </li>
      </ul>
    </div>
  </nav>


<div class="jumbotron">
<div class="card">
  <h1 class="text-center">Medicine Data </h1>
  <div class="card-body">

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';
$con = mysqli_connect($server,$user,$password,$db);

$query = "SELECT * FROM meddata";
$query_run = mysqli_query($con, $query);
?>


<table class="table table-dark"  id="myTable">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">mobile</th>
      <th scope="col">dob</th>
       <th scope="col">address</th>
        <th scope="col">state</th>
         <th scope="col">Medicine</th>
          <th scope="col">Injections</th>
          <th scope="col" colspan="2">Operation</th>
    </tr>
  </thead>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Patients.." title="Type in a name" width="100">
<?php
if($query_run)
{
  foreach($query_run as $row)
  {
  ?>
  <tbody>

    <tr>
      <td><?php echo $row['fullname'];      ?></td>
      <td><?php echo $row['mobile'];     ?></td>
      <td><?php echo  $row['dob'];    ?></td>
      <td><?php echo   $row['address'];   ?></td>
      <td><?php echo  $row['state'];   ?></td>
      <td><?php echo   $row['medtype'];   ?></td>
      <td><?php echo    $row['injecttype'];  ?></td>
        <td><a href="mail.php" data-toggle="tooltip" data-placement="top" title="Send Message"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
          <td><a href="deleteadminmedicine.php?ids=<?php echo $row['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    </tr>
   
  </tbody>
  <?php
  }
}
else
{
  echo "No Record Found";
}

?>

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
</body>
</html>