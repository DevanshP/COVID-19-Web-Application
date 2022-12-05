<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Project</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
  </head>
  <body onload="fetch()">
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
 
   <!-- covid 19 updates counter using jquery -->
   <!-- covid 19 updates counter using jquery -->
   <div class="container-fluid">
     <h1 class="text-center mt-6 mb-6">Covid-19 India </h1>
   
<div class="container mt-4 mb-3">
  <div class="row row-cols-4">
    <div class="col-sm">
       <h1 class="counter">25000000</h1>
     <p>Total Cases</p> 
    </div>
     <div class="col-sm">
       <h1 class="counter">44000000</h1>
     <p>Vaccinated</p>
    </div>
    <div class="col-sm">
       <h1 class="counter">26600000</h1>
     <p>Recovered</p>
     
  </div>
    <div class="col-sm">
       <h1 class="counter">274000</h1>
     <p>Deaths</p>
    </div>
</div>
</div>


   <!-- Corona Latest Update -->
  <section class="corona_update container-fluid">
    <div class="my-5">
      <h3 class="text-uppercase text-center"> COVID-19 LIVE UPDATES OF THE INDIA</h3>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
       <tr>
        <th class="text-capitalize">Last updated time</th> 
        <th class="text-capitalize">State</th>
        <th class="text-capitalize">confirmed</th>
        <th class="text-capitalize">active</th>
        <th class="text-capitalize">recovered</th>
        <th class="text-capitalize">deaths</th>
       </tr>
       
      <?php

    $data = file_get_contents('https://api.covid19india.org/data.json');
     
     $coronalive = json_decode($data, true);  // convert json to array in php
  

      
    $statescount = count($coronalive['statewise']);

    $i=1;
    while($i <  $statescount){

    ?>

    <tr>
      <td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
      <td> <?php echo $coronalive['statewise'][$i]['state'] ?></td>
      <td> <?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
      <td> <?php echo $coronalive['statewise'][$i]['active'] ?></td>
      <td> <?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
      <td> <?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

    </tr>



   
<?php

   $i++;
  }



      ?>



    </table>


    </div>
    
  </section>
















   <!-- ///////Scroll Behaviour////////// -->
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  </div>


<!-- footer Area Starts Here -->




<!-- //////////Footer Style//////// -->

  <footer class="mt-5">
    <div class="footer_style text-center text-white container-fluid">
      <p>Created By Devansh Pandey </p><br>
     <a href="https://api.covid19india.org/data.json"><p class="text-dark"> This Is Not A Official Website</p></a><br>
    </div>
  </footer>


  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>$('.counter').counterUp({
        delay: 10,
        time: 3000
    });</script>

    </body>
  </html>