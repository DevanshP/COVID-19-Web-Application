<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-19 Testing</title>

     <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
        <href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>

</head>

<body id="page-top">
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
             <li class="nav-item">
          <a class="nav-link" href="medicine.php">Request Medicines </a>
        </li>
       
          <a class="nav-link" href="contact.php">Covid Care</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="vaccinecentre.html">Find Vaccineation Centre </a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="payment.php">Donation </a>
        </li>
      </ul>
    </div>
  </nav>    


    <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                           <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>








    <!-- Page Wrapper -->
    <div id="wrapper">


        <div id="content-wrapper" class="d-flex flex-column">

          
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mt-5 text-center text-gray-800">Covid-19 Testing</h1>
<form method="post" action="code.php">
  <div class="row">
                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
                        <div class="form-group">
                            <label>Full Name</label>
                                            <input type="text" class="form-control"  name="fullname"  placeholder="Enter your full name..." title="letters only" required="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                  <input type="text" class="form-control"  name="mobile" placeholder="Please enter your mobile number" title="10 numeric characters only" required="true">
                                                <span id="mobile-availability-status" style="font-size:12px;"></span>
                                        </div>
                                        <div class="form-group">
                                             <label>DOB</label>
                                            <input type="date" class="form-control"  name="dob" required="true">
                                        </div>
                               <div class="form-group">
                                              <label>Address</label>
                                            <textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your full addres here"></textarea>
                                        </div>
 <div class="form-group">
                                              <label>State</label>
                                      <input type="text" class="form-control" id="state" name="state" placeholder="Enter your State Here" required="true">
                                        </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                           <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Testing Information</h6>
                                </div>
                                <div class="card-body">
                             <div class="form-group">
                                     <label>Test Type</label>
                                <select class="form-control"  name="testtype" required="true">
                              <option value="">Select</option> 
                               <option value="Antigen">Antigen</option>  
                           <option value="RT-PCR">RT-PCR</option>
                         <option value="CB-NAAT">CB-NAAT</option>    
                                  </select>
                                        </div>

                                         <div class="form-group">
                                            <label>Time Slot for Test</label>
                                 <input type="datetime-local" class="form-control" name="timeslot" class="form-control">                                        
                             </div>
                       <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" >                           
                             </div>

                                </div>
                            </div>
                       

                        </div>

                    </div>
</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



</body>

</html>







    