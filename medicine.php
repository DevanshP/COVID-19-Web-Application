<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Medicines Pack</title>
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
        <!--  <li class="nav-item">
            <a class="nav-link" href="#aboutid">About</a>
          </li><li class="nav-item">-->
            <li class="nav-item">
            <a class="nav-link" href="index.php">World Corona Live</a>
          </li><li class="nav-item">
             <li class="nav-item">
      <!--        <a class="nav-link" href="indiacoronalive.php">India Corona Live</a>
    </li>
          <a class="nav-link" href="#sympid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevent">Prevention</a>
        </li>-->
         <li class="nav-item">
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
                    if(isset($_SESSION['data']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                           <?php echo $_SESSION['data']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['data']);
                    }
                ?>


 <!-- Page Wrapper -->
    <div id="wrapper">


        <div id="content-wrapper" class="d-flex flex-column">

          
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mt-5 text-center text-gray-800">Request Medicines For Corona Virus</h1>
<form  action="medicinebackend.php" method="POST" enctype="multipart/form-data">
  <div class="row">
                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> Enter Personal Information</h6>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Select Medicine Information</h6>
                                </div>
                          <div class="card-body">
                             <div class="form-group">
                                     <label>Select Medicines</label>
                                <select class="form-control"  name="medtype" required="true">
                              <option value="">Select</option> 
                             <option value="Ivermectin-12mg">Ivermectin 12mg</option>  
                           <option value="Azithromycin-500-mg">Azithromycin 500 mg</option>
                         <option value="Crocin-650-mg">Crocin 650 mg</option>   
                         <option value="Azithromycin-500-mg">Azithromycin 500 mg</option>   
                         <option value="Limcee-500-mg">Limcee 500 mg</option> 
                          <option value="Zinconia-50-mg">Zinconia 50 mg </option> 
                           <option value="Calcirol-Sachet">Calcirol Sachet</option>  
                                  </select>
                                        </div>

                                        <div class="form-group">
                                     <label>Select Injections</label>
                                <select class="form-control"  name="injecttype" required="true">
                              <option value="">Select</option> 
                               <option value="Remdesivir">Remdesivir</option>  
                           <option value="Amphotericin-B">Amphotericin B</option>```
                                  </select>
                                        </div>
                 <!--       <div class="form-group">
                        <label>Upload Doctor Prescription</label>
                        <input type="file" name="image" class="form-control">
                        </div>   -->
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


