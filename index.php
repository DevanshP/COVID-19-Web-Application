
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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        <li class="nav-item">
          <a class="nav-link" href="payment.php">Donation </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="main_header">
    <div class="row h-100 w-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside">
          <img src="images/eksaath.png" width="300" height="300">
        </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside h-100 w-100">
         <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/corona.png" width="80">
          </span>na Virus</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Corona Latest Update -->
  <section class="corona_update container-fluid">
    <div class="mb-3">
      <h3 class="text-uppercase text-center"> COVID-19 LIVE UPDATES OF THE WORLD</h3>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
       <tr>
        <th>Country</th> 
        <th>TotalConfirmed</th>
        <th>TotalRecovered</th>
        <th>TotalDeaths</th>
        <th>NewConfirmed</th>
        <th>NewRecovered</th>
        <th>NewDeaths</th>
       </tr>
       

    </table>


    </div>
    
  </section>


<!-- footer Area Starts Here -->

<!-- //////////Footer Style//////// -->
<footer class="mt-5">
    <div class="footer_style text-center text-white container-fluid">
      <p>Created By Devansh Pandey</p> <br>
      <p>This Is Not A Official Website</p>
    </div>
  </footer>


<script type="text/javascript">
  
  function fetch(){
  $.get("https://api.covid19api.com/summary",
  function (data){
   // console.log(data['Countries'].length);
   var rbval = document.getElementById('tbval');
   for(var i=1; i<(data['Countries'].length); i++) {
     var x = tbval.insertRow();
     x.insertCell(0);
    
    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
    tbval.rows[i].cells[0].style.background = '#7a491';
    tbval.rows[i].cells[0].style.background = '#fff';

    x.insertCell(1);
    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
    tbval.rows[i].cells[1].style.background = '#4bb7d8';

    x.insertCell(2);
    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
    tbval.rows[i].cells[2].style.background = '#4bb7d8';

        x.insertCell(3);
    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
    tbval.rows[i].cells[3].style.background = '#f36e23';

        x.insertCell(4);
    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
    tbval.rows[i].cells[4].style.background = '#4bb7d8';

        x.insertCell(5);
    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
    tbval.rows[i].cells[5].style.background = '#9cc850';

        x.insertCell(6);
    tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
    tbval.rows[i].cells[6].style.background = '#f36e23';
   }
}
  );
}

</script>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>$('.counter').counterUp({
        delay: 10,
        time: 2000
    });</script>


    </body>
  </html>