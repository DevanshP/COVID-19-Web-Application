<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Covid-19 Donation</title>
   <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
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
          <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
        </li>
       
          <a class="nav-link" href="contact.php">Covid Care</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="vaccinecentre.html">Find Vaccineation Centre </a>
        </li>
      </ul>
    </div>
  </nav>


 <div class="container py-3">
    <div class="row">
      <div class="col-md-12"> 
        <h2 class="text-center mb-3">Covid-19 Donation Form</h2>

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
                <form action="pay.php" method="POST" autocomplete="off" class="form" id="formLogin" name="formLogin" role="form">
                  <div class="form-group">
                    <label for="uname1">Name</label> 
                    <input type="text"  class="form-control"  name="customername" required="" >
                  </div>
                  <div class="form-group">
                    <label>Email</label> 
                    <input type="email" class="form-control" name="customeremail" required >
                  </div>
                 <div class="form-group">
                    <label>Contact Number</label> 
                    <input type="number" class="form-control" name="contactno" required >
                  </div>
                  <div class="form-group">
                    <label>Donation Amount</label> 
                    <input type="number" class="form-control" name="price" required placeholder="Rs"> 
                  </div>
                  <button class="btn btn-success btn-lg float-centre" name="submit" type="submit">Donate</button>
                </form>







</div>



</body>
</html>