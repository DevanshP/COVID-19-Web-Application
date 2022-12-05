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
    <title>COVID-19 Donation Data</title>
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
          <a class="nav-link" href="display.php">Covid Care Data</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="adminmedicine.php">Medicine Data</a>
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
  <h1 class="text-center">Coronavirus Donation Data</h1>
  <div class="card-body">

<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db ='coviddb';
$con = mysqli_connect($server,$user,$password,$db);

$query = "SELECT * FROM donation";
$query_run = mysqli_query($con, $query);
?>


<table class="table table-dark"  id="myTable">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Payment ID</th>
      <th scope="col">status</th>
       <th scope="col">email</th>
        <th scope="col">price</th>
          <th scope="col" colspan="2">Operation</th>
    </tr>
  </thead>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for order id.." title="Type in a name" width="100">
<?php
if($query_run)
{
  foreach($query_run as $row)
  {
  ?>
  <tbody>

    <tr>
      <td><?php echo $row['order_id'];      ?></td>
      <td><?php echo $row['razorpay_payment_id'];  ?></td>
      <td><?php echo  $row['status'];    ?></td>
      <td><?php echo   $row['email'];   ?></td>
      <td><?php echo  $row['price'];   ?></td>
        <td><a href="mail.php" data-toggle="tooltip" data-placement="top" title="Send Message"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
          <td><a href="deleteadmindonation.php?ids=<?php echo $row['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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